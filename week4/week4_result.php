<?php
// 驗證並處理提交的表單數據
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 姓名
    if (empty($_POST["sname"])) {
        $sNameErr = "姓名是必填的";
    } else {
        $sName = $_POST["sname"];
    }

    // 科系
    if (empty($_POST["sdepartment"])) {
        $sDepartmentErr = "科系是必填的";
    } else {
        $sDepartment = $_POST["sdepartment"];
    }

    // 年級
    if (empty($_POST["sgrade"])) {
        $sGradeErr = "年級是必填的";
    } else {
        $sGrade = $_POST["sgrade"];
    }

    // 性別
    if (empty($_POST["Gender"])) {
        $sGenderErr = "性別是必填的";
    } else {
        $sGender = $_POST["Gender"];
    }

    // 電子郵件
    if (empty($_POST["Email"])) {
        $sEmailErr = "Email是必填的";
    } else {
        $sEmail = $_POST["Email"];
    }

    // 服裝尺寸
    if (empty($_POST["Size"])) {
        $sSizeErr = "請選擇服裝尺寸";
    } else {
        $sSize = $_POST["Size"];
    }

    // 其他意見
    $sComment = $_POST["Comment"];

    // 密碼（隱藏字段）
    $sSecret = $_POST["Secret"];

    // 如果沒有錯誤，輸出表單數據
    if (!isset($sNameErr) && !isset($sDepartmentErr) && !isset($sGradeErr) && !isset($sGenderErr) && !isset($sEmailErr) && !isset($sSizeErr)) {
        echo "姓名：" . $sName . "<br>";
        echo "科系：" . $sDepartment . "<br>";
        echo "年級：" . $sGrade . "<br>";
        echo "性別：" . $sGender . "<br>";
        echo "Email：" . $sEmail . "<br>";
        echo "服裝尺寸：" . $sSize . "<br>";
        echo "其他意見：" . $sComment . "<br>";
        echo "密碼：" . $sSecret . "<br>";
    }
}
?>
