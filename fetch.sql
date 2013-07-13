SELECT employee_info.username, 
	employee_info.email1, 
	employee_info.start_date, 
	employee_info.salary, 
	employee_company.company_name,
	permissions.is_active

FROM employee_info, employee_company, permissions
LEFT JOIN employee_company ON employee_company.employee_id = employee_info.employee_id
LEFT JOIN employee_permissions ON employee_permissions.employee_id = employee_info.employee_id
WHERE permissions.is_active = 1