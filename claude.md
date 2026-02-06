# 予約ルームズ（Rooms）WordPress テーマ

## プロジェクト背景

株式会社RECEPTIONIST が提供する5つのプロダクトすべてのWordPressサイトを、株式会社メディア・コンフィデンスがリニューアル中。本リポジトリはそのうちの「予約ルームズ」を対象とする。

### RECEPTIONIST 5プロダクト共通構成

- 5サイトそれぞれ個別の GitHub リポジトリで管理
- 各サイトに AWS Lightsail のステージングと本番（計10台）
- SSH 認証鍵は5ブランド共通（`~/.ssh/event-invite-key`）
- VPN + 認証鍵でサーバーにアクセス

### 制作体制

- クライアント: 株式会社RECEPTIONIST
- 制作: 株式会社メディア・コンフィデンス（早野）

### 開発方針（5サイト共通）

- 1つ目のプロダクト「受付（RECEPTIONIST）」が先行してリニューアル済み（約1年の開発実績）。機能・構成ともに最も成熟している
- 後発4サイト（予約ルームズ含む）は「受付」のテーマ構成に合わせて統一する
- 統一対象: フォルダ構成、JS の管理方法、カスタム投稿タイプ設計、single/archive テンプレート構成、テーマ全体のファイル分割方針
- 市販プラグインは最低限に抑え、必要な機能はできるだけ自作して5サイト共通で適用する

## 概要

予約ルームズ（rooms2026）は「予約ルームズ」のコーポレートサイト用 WordPress テーマ。テーマ単体で完結する構成（プラグイン非依存）。

## 環境情報

### ステージング

- URL: https://staging.rooms.receptionist.jp/
- Basic認証: `receptionist` / `P@s$w0rD!`
- WP管理画面: `user` / `tnetLO7HPwv/`

### SSH接続（5ブランド共通鍵）

- 鍵: `~/.ssh/event-invite-key`
- ステージング: `ssh bitnami@staging.rooms.receptionist.jp -i ~/.ssh/event-invite-key`
- 本番: `ssh bitnami@rooms.receptionist.jp -i ~/.ssh/event-invite-key`

### WordPress パス（サーバー上）

- WP ルート: `/opt/bitnami/wordpress/`
- テーマディレクトリ: `/opt/bitnami/wordpress/wp-content/themes/`
- 旧本番テーマ（参照用・非破壊）: `rooms.receptionist.jp`
- 作業用テーマ（Git管理）: `rooms2026`

### GitHub

- リポジトリ: https://github.com/HayanoRyuki/rooms2026
- ブランチ: `main`

### ローカル

- パス: `/Users/hayanoryuki12/Local Sites/rooms2026`

## 作業ルール

1. **編集はローカルのみ** — ステージングで直接編集しない
2. **GitHub を正とする** — ローカル・GitHub・ステージングの三点同期
3. **作業フロー**:
   - ローカルで修正
   - `git add` → `commit` → `push`
   - ステージングで `git pull`
   - 表示確認
   - 許可後に本番反映（別フェーズ）

## テーマ構成（rcp2026 統一済み）

```
rooms2026/
├── style.css                  # テーマ定義（WPテーマヘッダーのみ）
├── functions.php              # テーマ設定エントリ（配列ループで inc/ 読み込み）
├── front-page.php             # トップページ
├── header.php / footer.php
├── header-menu.php / header-menuindex.php / header-gtm.php
├── footer-service.php
├── page-*.php                 # 固定ページテンプレート
├── single-*.php               # カスタム投稿タイプ個別
├── archive-*.php              # カスタム投稿タイプ一覧
├── inc/                       # PHP インクルード（rcp2026 方式）
│   ├── setup.php                  # テーマセットアップ・パンくず・linkcard・canonical
│   ├── assets.php                 # CSS/JS 読み込み（filemtime キャッシュバスト）
│   ├── post-types-register.php    # CPT/タクソノミー登録（一括）
│   ├── post-type-case.php         # 導入事例の個別機能
│   ├── post-type-event.php        # イベントの個別機能
│   └── post-type-resource.php     # 資料の個別機能
├── sections/                  # トップページセクション
├── template-parts/            # 再利用パーツ（case/ event/ resource/）
└── assets/                    # 静的リソース（rcp2026 方式）
    ├── css/
    │   ├── reset.css / common.css / header.css / footer.css
    │   ├── sections/          # トップページセクション別CSS
    │   ├── archive/           # アーカイブ共通 + タイプ別CSS
    │   ├── single/            # シングル共通 + タイプ別CSS
    │   ├── page/              # 固定ページ共通 + 自動検出CSS
    │   └── hero/              # ヒーロー画面幅別CSS（sm/md/lg/xl）
    ├── js/
    │   ├── main.js / footer.js
    │   └── lib/               # ベンダーライブラリ
    └── img/                   # 画像素材
```

## カスタム投稿タイプ

- **case** — 導入事例
- **event** — イベント・セミナー
- **resource** — お役立ち資料

## コーディング規約

- PHP: WordPress Coding Standards に準拠
- CSS: `assets/css/` 配下にサブディレクトリで分割管理（rcp2026 方式）
- JS: `assets/js/` 配下、ベンダーは `lib/` に配置
- ハンドル名: `rooms2026-` プレフィックス統一
- キャッシュバスト: `filemtime()` で自動バージョニング
- プラグイン非依存 — テーマ単体で完結させる
- 日本語コメント推奨
