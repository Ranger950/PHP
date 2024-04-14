<!DOCTYPE html>
<html lang="zh-Hant">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>資管晚會報名表單</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    h2 {
        text-align: center;
    }
    label {
        display: inline-block;
        width: 120px;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    textarea,
    select {
        width: calc(100% - 130px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 5px;
    }
    input[type="submit"],
    input[type="reset"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h2>資管晚會報名表單</h2>
    <form action="week4_result.php" method="post">
        <label for="sname">姓名：</label>
        <input type="text" id="sname" name="sname" required><br>
        <label for="sdepartment">科系：</label>
        <input type="text" id="sdepartment" name="sdepartment" required><br>
        <label>年級：</label>
        <input type="radio" id="sgrade1" name="sgrade" value="一年級" required><label for="sgrade1">一</label>
        <input type="radio" id="sgrade2" name="sgrade" value="二年級"><label for="sgrade2">二</label>
        <input type="radio" id="sgrade3" name="sgrade" value="三年級"><label for="sgrade3">三</label>
        <input type="radio" id="sgrade4" name="sgrade" value="四年級"><label for="sgrade4">四</label><br>
        <label>性別：</label>
        <input type="radio" id="male" name="Gender" value="男" required><label for="male">男</label>
        <input type="radio" id="female" name="Gender" value="女"><label for="female">女</label><br>
        <label for="Email">Email：</label>
        <input type="email" id="Email" name="Email" required><br>
        <label for="Size">請輸入衣服尺寸：</label>
        <select id="Size" name="Size" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select><br>
        <label for="Comment">其他：</label>
        <textarea id="Comment" name="Comment" rows="5" cols="50"></textarea><br>
        <input type="hidden" name="Secret" value="I love u">
        <input type="submit" value="確認">
        <input type="reset" value="刪除">
    </form>
</div>
</body>
</html>
