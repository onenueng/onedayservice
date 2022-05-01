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
