##code-examples
### Instructions
1. Fork this repo.
2. Provide answers to tasks in the form of new code.
3. Commit your code

#### Task 1
Explain what the code in <code>admin.php</code> does, line by line, in plain, concise english.  Identify as many bugs as you can and why they are bugs.
>Context: A page called login.php asks for a username and password.  If the password is correct, it redirects the user to <code>admin.php</code>.

**Task 1 Answer: submit PR for an updated <code>admin.php</code> with your comments**

#### Task 2
Given the table below, improve the structure of this database (adjust fields, data format, tables, order, field types, etc).

```sql
CREATE TABLE employee_info (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(64),
	email1 VARCHAR(64),
	email2 VARCHAR(128),
	password VARCHAR(14),
	company_name VARCHAR(128),
	company_phone CHAR(11),
	company_address VARCHAR(128),
	job_title CHAR(256),
	salary VARCHAR(10),
	permission_level VARCHAR(32),
	is_permission_level_active VARCHAR(10),
	start_date VARCHAR(11)
);
```

Answer should be a new "CREATE TABLE" script.
>SQL for creating table does not have to include data, just structure.

Sample output from <code>employee_info</code> table:
```bash
Employees
id, username, email1, email2, password, company_name, company_phone, company_address, job_title, salary, permission_level, is_permission_level_active, start_date
37, JohnSmith, jsmith@acme.com, johnsmith@acme.com, 764efa883dda1e11db47671c4a3bbd9e, ACME Inc, 555-2323, 123 Acme Way, Director, $100,000, admin, true, 2012-02-23
39, JaneSmith, jsmith1@acme.com, NULL, 153c2c618d157c4a3ba08e23a06b70d7, ACME INC, 555-2323, 123 ACME WAY, VP, $120,000, user, true, 99-03-19
40, ChrisSmith, csmith1@example.com, NULL, 34921ae7e3079e44e0ee2f96d8ee6e87, Example Dot Com, 555-1234, 456 Example Lane, Manager, $60,000, user, false, 2010-8-4
42, KateSmith, ksmith1@example.com, NULL, dbe39d9d56f98d5f9cb22df15b285791, Example Dot Com, 555-1234, 456 Example Lane, Sr Manager, $80,000, admin, false, 2004-12-24
```

**Task 2 Answer: submit PR with a new file <code>db.sql</code> with your SQL statement(s)**

#### Task 3
After improving the database, write a raw sql statement that gets the username, first email, start_date, salary, and company_name for all active admins from your new database format.
>This should be written in SQL, not PHP.

**Task 3 Answer: submit PR with a new file <code>fetch.sql</code> with your SQL statement(s)**
