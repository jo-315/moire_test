# 2018/12/31で終了



# ファイル構成
root/

|

├ original_static_page (ダッシュボードで編集して内容はgit管理になっていないのでこちらに足しておく: バックアップ)

|

├ wp-content - themes - zillah(基本いじるのはこの中)- style.css(この中にclassを足していきましょう)






# 環境開発
1. local by flywheel をインストール

　　ローカル環境でwordpressを動かせる便利なやつ
  
　　https://local.getflywheel.com/
  
　　生成されたファイルはLocal Sites内に配置される


2.　`Local Sites/自分で決めたディレクトリ名/app/public`　　以下のファイルを削除する

3. /publicで `git init`

4. `git clone`

5. /public/original_static_page内のhtmlファイルを管理画面でコピペする
