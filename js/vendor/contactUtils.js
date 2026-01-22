function formValidate(formName) {
  $.validator.addMethod( "regex", function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
    },
    "正しい電話番号を入力してください。"
  );
  $(`form[name="${formName}"]`).validate({
    rules: {
      company_name: "required",
      last_name: "required",
      first_name: "required",
      email: {
        required: true,
        email: true
      },
      phone_no: {
        required: true,
        regex: /^([0-9]|-)*$/,
      },
      chat_tool: "required",
      scheduler: "required",
      employee_number: "required",
      agree: {
        required: true,
      },
      body: "required",
      reception_time: {
        required: true,
        number: true,
      }
    },
    messages: {
      company_name: "必須項目です。",
      last_name: "必須項目です。",
      first_name: "必須項目です。",
      email: "正しいメールアドレスを入力してください。",
      phone_no: {
        required: "必須項目です。",
        regex: "正しい電話番号を入力してください。"
      },
      chat_tool: "必須項目です。",
      scheduler: "必須項目です。",
      employee_number: "必須項目です。",
      agree: "個人情報の取り扱いに同意していただく必要があります。",
      body: "必須項目です。",
      reception_time: "数値で入力してください。"
    },
    errorPlacement: function (err, element) {
      if (element.attr("name") == "agree") {
        element.parent().after(err);
      } else {
        element.after(err);
      }
    },
  });
  return $(`form[name="${formName}"]`).valid();
}

function requestContactParams() {
  return {
    contact: {
      contact_type: $("input[name=contact_type]").val(),
      company_name: $("input[name=company_name]").val(),
      last_name: $("input[name=last_name]").val(),
      first_name: $("input[name=first_name]").val(),
      email: $("input[name=email]").val(),
      phone_no: $("input[name=phone_no]").val(),
      chat_tool: $("select[name=chat_tool] option:checked").val(),
      scheduler: $("select[name=scheduler] option:checked").val(),
      employee_number: $("select[name=employee_number] option:checked").val(),
      contact_category_id: $("select[name=contact_category_id] option:checked").val(),
      reception_time: $("input[name=reception_time]").val(),
      body: $("textarea[name=body]").val(),
    }
  }
}

function sendRequest(params, formName, isNew = false) {
  const defaultButtonText = $('#send').attr("value");

  $('#send').attr("disabled", true).attr("value", "送信中です...");

  const url = window.location.hostname;
  let endpoint, isEnablePardot;
  switch(true) {
    case url.indexOf("localhost") != -1:
      isEnablePardot = false;
      endpoint = "http://localhost:3000/api/contacts";
      break;
    case url.indexOf("staging") != -1:
      isEnablePardot = false;
      endpoint = "https://zng21zoto0.execute-api.ap-northeast-1.amazonaws.com/production";
      break;
    case url.indexOf("testing") != -1:
      isEnablePardot = false;
      endpoint = "https://testing.api.receptionist.jp/api/contacts";
      break;
    case !url.indexOf("localhost") != -1 && !url.indexOf("staging") != -1 && !url.indexOf("testing") != -1:
      isEnablePardot = true;
      endpoint = "https://zng21zoto0.execute-api.ap-northeast-1.amazonaws.com/production";
      break;
  }
  $.post({
    url: endpoint,
    data: params,
    success: function(data) {
      if (isNew) {
        if (isEnablePardot) {
          $(`form[name="${formName}"]`).attr('action', data.form_handler_endpoint).submit();
        } else {
          window.location.href = window.location.origin + generateRedirectPath();
        }
      }
      else {
        if (isEnablePardot && $(`form[name="${formName}"]`).attr('action')) {
          $(`form[name="${formName}"]`).submit();
        } else {
          window.location.href = window.location.origin + generateRedirectPath();
        }
      }
    },
    error: function(data) {
      $('#send').attr("disabled", false).attr("value", defaultButtonText);
      $("#result").html("エラーが発生しました。<br/>" + data.responseJSON ? data.responseJSON.error.message : data.status + data.statusText);
    }
  });
}

function generateRedirectPath() {
  let redirectPath;
  switch(window.location.pathname) {
    case "/contact/":
      redirectPath = "/contact-thanks/";
      break;
    case "/document-price/":
      redirectPath = "/document-price-thanks/";
      break;
    case "/":
    case "/documents/":
      redirectPath = "/documents-thanks/";
      break;
  }
  return redirectPath;
}
