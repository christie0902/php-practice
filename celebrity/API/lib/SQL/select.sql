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


SELECT *
FROM `cities`
WHERE `district` LIKE '%Holland'

SELECT *
FROM `cities`
WHERE `name` LIKE '%ville%'


SELECT *
FROM `cities`
WHERE `country_id` IN ('56', '199', '172', '98')
ORDER BY `population` DESC
LIMIT 10


-- INSERT
INSERT
INTO `regions`
(`name`, `slug`)
VALUES
('Eastern Europe', 'eastern-europe'),
('North America', 'north-america'),
('Central America', 'central-america'),
('South America', 'south-america')

--UPDATE
UPDATE `cities`
SET `name` = 'Prague'
WHERE `id` = '3339'

SELECT *
FROM `cities`
WHERE `id` = '3339'

UPDATE `countries`
SET `Population` = '300',
    `GNP` = '13.91'
WHERE `name` = 'United States Minor Outlying Islands'

--DELETE
DELETE
FROM `regions`
WHERE `id` = 1

