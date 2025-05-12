# Laravel Lesson レビュー①

## Todo一覧機能

### Todoモデルのallメソッドで実行しているSQLは何か
select * from todos;

### Todoモデルのallメソッドの返り値は何か
todosテーブルの全レコード情報のcollectionクラス。
### 配列の代わりにCollectionクラスを使用するメリットは
可読性が高い。
### view関数の第1・第2引数の指定と何をしているか
第一引数は、表示するbladeファイルを指定し、第二引数で渡す変数を指定している。
### index.blade.phpの$todos・$todoに代入されているものは何か
all()の返り値のcollectionファイル。
## Todo作成機能

### Requestクラスのallメソッドは何をしているか
フォームから送られてきた全てのデータを、連想配列にして返す。
### fillメソッドは何をしているか
配列で渡されたデータを一括で代入している。
### $fillableは何のために設定しているか
contentカラムしか代入できなようにしている。
### saveメソッドで実行しているSQLは何か
insert into todos (content) values (`取得したデータ`);
update todos set content = (`取得したデータ`);
### redirect()->route()は何をしているか
route()の引数で指定したページを表示する。
## その他

### テーブル構成をマイグレーションファイルで管理するメリット
複数人で開発をする際、テーブル構成を同じにしやすい。
### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか
up()→php artisan migration、down()→php artisan migration:rollback
### Seederクラスの役割は何か
テーブルに、テストデータを作成する役割。
### route関数の引数・返り値・使用するメリット
引数には遷移先を指定。返り値は指定した遷移先のURL。名前付きルートを使用すれば保守性が高まる。
### @extends・@section・@yieldの関係性とbladeを分割するメリット
@extends→ベースのbladeファイルを指定。@section→差し込む内容。@yield→差し込む場所。
分割することでコードの記述量が減り、可読性が高まる。
### @csrfは何のための記述か
hidden　inputタグを生成し、トークンを作成している。
### {{ }}とは何の省略系か
<?php echo ~ ?>