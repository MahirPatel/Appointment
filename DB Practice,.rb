DB Practice,

Table : tbl_roles
id
role
role_code
group_code
added_date
added_by
update_date
update_by
sys_delete
status

Table : tbl_role_rights
id
role_code
module_code
add
update
delete
view
print
export
added_date
added_by
update_date
update_by
sys_delete


Table : tbl_modules
id
module_name
module_code
module_link
module_icon
module_type
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_menus
id 
parent_menu_code
parent_menu_name
parent_menu_icon
menu_code
menu_name
menu_icon
module_code
role_code
status
added_date
added_by
update_date
update_by
sys_delete

Table : entity_wise_url
id
entity_code
entity_name
entity_url
entity_extra_params
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_insert_sync_log
id
user_config
base_file_path
module_code
input_params
output_params
error_message
status
added_date
sys_delete

Table : tbl_update_sync_log
id
user_config
base_file_path
module_code
input_params
output_params
error_message
status
added_date
sys_delete

Table : tbl_remove_sync_log
id
user_config
base_file_path
module_code
input_params
output_params
error_message
status
added_date
sys_delete

Table : tbl_other_sync_log
id
user_config
base_file_path
module_code
input_params
output_params
error_message
status
added_date
sys_delete

Table : tbl_country
id
country
country_code
country_code_iso_3
country_flag
country_mobile_code
country_time_zone
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_state
id 
country_id
country_code
state
state_code
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_mod_setting
id
setting_code
setting_description
setting_value
setting_category
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_custom_capablities
id
role_code
capablities
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_users
id
username
first_name
middle_name
last_name
email
contact
password
config
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_users_roles
id 
user_id
role_code
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_user_addresses
id
user_id
type
country
state
city
address
pin_code
latitude
longitude
status
added_date
added_by
update_date
update_by
sys_delete

Table : tbl_user_activities
id
user_id
device_type
device_code
device_token
device_info
login_with
verification_code
verification_code_sent_time
verification_code_expire_time
verification_code_status
current_session_status
last_session_status
incorrect_attempts
block_device
block_device_time
block_device_reason

