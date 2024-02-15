SELECT *
FROM `countries`;

-- select * from countries (Another shorter way)

SELECT *
FROM `countries`
WHERE `population` > 20000000;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` ASC;
-- ASC is default value

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` ASC
LIMIT 10;

SELECT `id`, `name`, `population`
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` ASC
LIMIT 10;

SELECT *
FROM `countries`
WHERE `name` = 'Czech Republic'
LIMIT 1;
-- id 56

SELECT *
FROM `cities`
WHERE `country_id` = '56'
ORDER BY `population` DESC
LIMIT 10;

SELECT *
FROM `countries`
ORDER BY `continent` =`Europe` DESC,
-- true (1) first because it will have result 0 or 1
'name' ASC;
