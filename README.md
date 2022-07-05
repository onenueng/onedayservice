# One Day Service

## database

### Relationships
1. clinic has many procedures
2. room has many beds

booking -> patient_id
booking -> room_id
booking -> bed_id
booking -> clinic_id
booking -> procedure_id
booking -> user_id


## reservation
patient_id
//HN
//Full name
//Tel
room_id
bed_id
วันที่เริ่มต้น bookings_datetime_start (YYYY-MM-DD H:i:s )
วันที่สิ้นสุด bookings_datetime_stop (YYYY-MM-DD H:i:s)
วันประจำสัปดาห์ bookings_week_day
clinic_id
procedure_id
user_id

## MVC
* Model - database mapper
* View - UI => template(html+css) + data(Model)
* Controller - flow 


## CSRF token ใช้กับการ post request

ขั้นตอนการทำงาน

[1] admin เห็นการจองทั้งหมด + แสดงรายละเอียด + สามารถยกเลิกได้
[2] user ที่ทำการจอง เห็นของตัวเองเท่านั้น + แสดงรายละเอียด + สามารถยกเลิกได้
[3] filter การจองตาม [clinic + วันที่]

ขั้นตอนการทำ
ทำหน้า index เบื้องตนเสร็จแล้ว [1]
จากนั้น ทำส่วน login+register ด้วย ad
จากนั้น style login+register page พร้อมด้วย nav ของหน้าที่เข้าใช้งานได้หลังจาก login สำเร็จ
จากนั้น ดึง hn
จากนั้น เปิดสิทธิ์ user
จากนั้น ทำ filter หน้า index [2], [3]
    
