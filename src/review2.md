# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
input hiddenタグが生成される。name = "_method" vlue = "put"

### findメソッドの引数に指定しているIDは何のIDか
押下されたデータのidカラムの値。押下されたレコードに対応する、Todoクラスのインスタンスから取得。

### findメソッドで実行しているSQLは何か
select id from todos;

### findメソッドで取得できる値は何か
idに対応するレコード。Todoクラスのインスタンス。
### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
主キーが存在しているかどうか

## Todo論理削除

### traitとclassの違いとは
インスタンス化できるか。複数使う事ができるか（クラスは継承）。

### traitを使用するメリットとは
どこからでも処理を呼び出せる事。

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
web.phpからメソッドが呼び出された時。

### RequestクラスからFormRequestクラスに変更した理由
バリデーション機能を指定して実装するため。

### $errorsのhasメソッドの引数・返り値は何か
引数→エラーを調べたい項目。返り値→boolean型。

### $errorsのfirstメソッドの引数・返り値は何か
引数→エラーが発生したキー名。返り値→string型。

### フレームワークとは何か
製作を簡略化する枠組み

### MVCはどういったアーキテクチャか
Model、Controller、Viewsに分けて機能を実装することで、構造を明瞭にする。

### ORMとは何か、またLaravelが使用しているORMは何か
Object Relational Mappingの略で、DBとプログラムを結びつける仕組みの事。laravelはEloquent ORMを使用。

### composer.json, composer.lockとは何か
composer.json→作成するプロジェクトに必要なプログラムファイルを指定するファイル。 composer.lock→jsonファイルに記述された機能の正確なバージョンを記述する。

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
vender
