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

DELETE 
FROM `regions`
WHERE `slug` LIKE '%america%'
LIMIT 1

--TRUNCATE
TRUNCATE TABLE `users`;
--remove data and set id back to the beginning , different from if not specify LIMIT and WHERE

--DROP
DROP TABLE `region`
--remove the table completely


--JOIN
SELECT `cities`.`name` AS 'City_name', `cities`. `population` AS 'City_population', `countries` . `name` AS 'Country_name'
FROM `cities`
LEFT JOIN `countries` ON `cities`.`country_id` = `countries`.`id`
WHERE `cities`.`population` > 5000000

--JOIN
SELECT `countries`.`name` AS 'Country',`languages` . `name` AS 'Language'
FROM `country_language`
LEFT JOIN `languages` ON `languages`.`id` = `country_language`.`language_id`
LEFT JOIN `countries` ON `country_language`.`country_id` = `countries`.`id`
WHERE `languages`.`name` = 'English';



-- Select 10 best movies
SELECT *
FROM `movies`
ORDER BY `rating` DESC
LIMIT 10

-- Select 10 best movies that have at least 5000 votes.
SELECT *
FROM `movies`
WHERE `votes_nr` >=5000
ORDER BY `rating` DESC
LIMIT 10

--Select 10 best movies that have at least 5000 votes and are actually feature films.
SELECT *
FROM `movies`
LEFT JOIN `movie_types` ON `movies`.`movie_type_id` = `movie_types`.`id`
WHERE `movies`. `votes_nr` >=5000
AND `movie_types` . `name` = 'feature'
ORDER BY `rating` DESC
LIMIT 10

--Boss: What is the ID of the movie "Shawshank redemption"?
SELECT `id`
FROM `movies`
WHERE `name` LIKE '%Shawshank%'

--  Add a new movie.
INSERT
INTO `movies`
(`name`, `year`,`rating`)
VALUES
('Oppenheimer', '2023' ,'8.4')

-- What is the ID of the movie you inserted?
SELECT `id`
FROM `movies`
WHERE `name` LIKE '%penheimer%'
--5863127

-- Update the movie's type, status and certification.
--type: feature , status: completed, certification: PG-13
UPDATE `movies`
SET `movie_type_id` = '1' , `movie_status_id` = '14', `certification_id` = '26'
WHERE `id` = '5863127'

--Give me information about the movie you inserted, including its type, status and certification.
SELECT `movies`. `name`, `year`, `rating`, `movie_types` . `name` AS 'Type', `movie_statuses`.`slug` AS 'Status', `certifications`.`slug` AS 'Certification'
FROM `movies`
LEFT JOIN `movie_types` ON `movies`.`movie_type_id` = `movie_types`.`id`
LEFT JOIN `movie_statuses` ON `movies`.`movie_status_id` = `movie_statuses`.`id`
LEFT JOIN `certifications` ON `movies`.`certification_id` = `certifications`.`id`
WHERE `movies`.`id` = '5863127'