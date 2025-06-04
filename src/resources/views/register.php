<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <header>mogitate</header>
 <h2>商品登録</h2>
 <span>商品名</span><span>必須</span><br>
 <input type="text" name="productname" placeholder="商品名を入力" value=""><br>
 <span>値段</span><span>必須</span><br>
 <input type="text" name="price" placeholder="値段を入力" value=""><br>
 <span>商品画像</span><span>必須</span><br>
 <input type="file" name="example" accept=".png, .jpeg"><br>
 <span>季節</span><span>必須</span><br>
 <input type="radio" name="season" value="春">春
 <input type="radio" name="season" value="夏">夏
 <input type="radio" name="season" value="秋">秋
 <input type="radio" name="season" value="冬">冬
 <br>
 <span>商品説明</span><span>必須</span><br>
 <textarea cols="50" rows="5" name="explation" placeholder="商品説明を入力"></textarea><br>

<input type="submit" name="return" value="戻る"/>
<input type="submit" name="register" value="登録"/>


</body>
</html>