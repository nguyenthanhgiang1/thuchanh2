<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>select a.*
FROM baiviet a inner join theloai b 
ON a.ma_tloai=b.ma_tloai
WHERE b.ten_tloai="Nhạc trữ tình"</h1>
<h2>select a.*
FROM baiviet a inner join tacgia b 
ON a.ma_tgia=b.ma_tgia
WHERE b.ten_tgia="Nhạcvietplus"</h2>
<h3>SELECT *
FROM theloai 
WHERE theloai.ma_tloai not in(
SELECT baiviet.ma_tloai
    FROM baiviet
)</h3>
<h4>SELECT a.ma_bviet,a.baiviet,a.ten_bhat,b.ten_tgia,c.ten_tloai,a.ngayviet
FROM baiviet a, tacgia b, theloai c
WHERE a.ma_tgia=b.ma_tgia and a.ma_tloai=c.ma_tloai</h4>
<h6>SELECT b.ten_tgia
from 
(select baiviet.ma_tgia,count(baiviet.ma_bviet) as tong
from baiviet
GROUP by baiviet.ma_tgia
ORDER BY tong DESC
limit 2) a LEFT join tacgia b 
on a.ma_tgia=b.ma_tgia</h6>
   
</body>
</html>
<!-- 1 text không có độ dài(tom tat, bai viet)
2 khoa ngoai 
3 design

SELECT a.ma_bviet,a.tieude,a.ten_bhat,b.ten_tgia,c.ten_tloai,a.ngayviet
from baiviet a,tacgia b, theloai c
WHERE a.ma_tgia=b.ma_tgia or a.ma_tloai=c.ma_tloai

cau1 dung quan he inner join 

3 chir caanf ko co thoi
 
3 dai dong
-view
<h1>select a.* from baiviet a inner join theloai b on a.ma_tloai=b.ma_tloai where b.ten_tloai='Nhạc trữ tình'</h1>
    <h2>SELECT a.* from baiviet a inner join tacgia b on a.ma_tgia=b.ma_tgia where b.ten_tgia='Nhacvietplus'</h2>
    <h3>SELECT * FROM theloai where theloai.ma_tloai NOT IN
    ( SELECT b.ma_tloai 
    from baiviet a INNER join theloai b 
    on b.ma_tloai=a.ma_tloai)</h3>
    <h4>SELECT *
       from baiviet a inner join tacgia b 
       on a.ma_tgia=b.ma_tgia 
       inner JOIN theloai c 
       on a.ma_tloai=c.ma_tloai</h4> -->

        