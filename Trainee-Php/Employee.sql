
-- create
CREATE TABLE EMPLOYEE (
    empId INTEGER PRIMARY KEY,
    firstname VARCHAR(250) NOT NULL,
    lastname VARCHAR(250) NOT NULL,
    department VARCHAR(100) NOT NULL,
    salary INTEGER,
    joining_year INTEGER NOT NULL,
    joining_month VARCHAR(50) NOT NULL,
    joining_date DATE NOT NULL
);

CREATE TABLE INCENTIVES (
    empId INTEGER PRIMARY KEY,
    incentive_amount INTEGER,
    FOREIGN KEY (empId) REFERENCES EMPLOYEE(empId)
);



INSERT INTO EMPLOYEE 
(empId, firstname, lastname, department, salary, joining_year, joining_month, joining_date)
VALUES
(1, 'John', 'Doe', 'HR', 50000, 2022, 'January', '2022-01-10'),
(2, 'Alice', 'Smith', 'IT', 70000, 2021, 'March', '2021-03-15'),
(3, 'Bob', 'Brown', 'IT', 70000, 2020, 'July', '2020-07-20'),
(4, 'Charlie', 'Davis', 'Finance', 60000, 2019, 'December', '2019-12-05'),
(5, 'David', 'Wilson', 'HR', NULL, 2023, 'June', '2023-06-25'),
(6, 'Chris', 'Taylor', 'Finance', 0, 2022, 'August', '2022-08-18'),
(7, 'Ankit', 'Patel', 'IT', 80000, 2021, 'April', '2021-04-12'),
(8, 'Brian', 'Lee', 'HR', 55000, 2020, 'May', '2020-05-30'),
(9, 'Cathy', 'Clark', 'Finance', 75000, 2018, 'September', '2018-09-14'),
(10, 'John', 'Walker', 'IT', 65000, 2022, 'October', '2022-10-22');

INSERT INTO INCENTIVES 
(empId, incentive_amount)
VALUES
(1, 2000),
(2, 5000),
(3, 3000),
(4, 4000),
(7, 6000),
(8, 1500),
(9, 3500);


select firstname, joining_year, joining_month from EMPLOYEE;

select * from EMPLOYEE ORDER BY firstname asc;


select * from EMPLOYEE where firstname LIKE '%o%';

SELECT department, MAX(salary) AS max_salary
FROM EMPLOYEE
GROUP BY department
ORDER BY max_salary ASC;

SELECT *
FROM EMPLOYEE
WHERE firstname LIKE 'A%' 
   OR firstname LIKE 'B%' 
   OR firstname LIKE 'C%';
   
SELECT MAX(salary) AS third_highest_salary
FROM EMPLOYEE
WHERE salary < (
    SELECT MAX(salary)
    FROM EMPLOYEE
    WHERE salary < (
        SELECT MAX(salary)
        FROM EMPLOYEE
    )
);

SELECT e.firstname, i.incentive_amount
FROM EMPLOYEE e
JOIN INCENTIVES i 
ON e.empId = i.empId
WHERE i.incentive_amount > 3000;