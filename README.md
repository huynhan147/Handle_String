# Thư viện hỗ trợ hiển vị trí chuỗi con trong chuỗi cha.
## Cài đặt
```
composer require huyit/handle_string

```
## Sử dụng
- include file `autoload.php`;
```
    use Handle_String\Handle_String;
```
- Khởi tạo đối tượng, truyền vào các giá trị gồm : 
    - Mảng vị trí xuất hiện của chuỗi con: `$arr`
    - Chuỗi cha : `$String`
    - Độ dài của chuỗi con `$len`
````
$handle = new Handle_String($arr,$String,$len);
````
- Cách lấy dữ liệu : 
```
$data= $handle->ShowString();
trả về chuỗi trong đó đã xác định rõ từng vị trí của chuỗi con
```