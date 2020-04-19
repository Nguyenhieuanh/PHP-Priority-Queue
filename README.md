#Priority_Queue

##[Bài tập] Ưu tiên khám bệnh

###Mục đích

Luyện tập sử dụng cấu trúc Queue.

###Nội dung

Trong quá trình hoạt động hàng đợi bình thường, khi một phần tử bị xóa khỏi hàng đợi, phần tử đó luôn là phần tử đầu tiên đã được chèn vào hàng đợi. Tuy nhiên, có một số ứng dụng của hàng đợi, yêu cầu rằng các phần tử được gỡ bỏ theo một trật tự khác với việc vào trước, ra trước. Khi chúng ta cần mô phỏng ứng dụng như vậy, chúng ta cần phải tạo một cấu trúc dữ liệu được gọi là hàng đợi ưu tiên.

Hàng đợi ưu tiên là một loại hàng đợi trong đó các phần tử được loại bỏ khỏi hàng đợi dựa trên một ràng buộc ưu tiên. Ví dụ, phòng chờ tại khoa cấp cứu của bệnh viện (ED) hoạt động sử dụng hàng đợi ưu tiên. Khi một bệnh nhân vào ED, người đó sẽ được y tá khám. Công việc của y tá là đánh giá mức độ nghiêm trọng của tình trạng bệnh nhân và chỉ định bệnh nhân một mã. Bệnh nhân có mã ưu tiên cao được nhìn thấy trước bệnh nhân có mã ưu tiên thấp hơn và bệnh nhân có cùng mã ưu tiên được nhìn thấy trên cơ sở người đến trước.

