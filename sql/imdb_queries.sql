SELECT name
FROM movies
WHERE year='1995';

SELECT COUNT(*)
FROM actors a
         JOIN roles r ON a.id=r.actor_id
         JOIN movies m ON r.movie_id = m.id
         JOIN movies_directors md ON md.movie_id=m.id
WHERE m.name='Lost In Translation';

SELECT a.first_name, a.last_name, d.first_name, d.last_name
FROM actors a
         JOIN roles r ON a.id=r.actor_id
         JOIN movies m ON r.movie_id = m.id
         JOIN movies_directors md ON m.id=md.movie_id
         JOIN directors d ON md.director_id=d.id
WHERE m.name='Lost In Translation';

SELECT first_name, last_name, m.name
FROM directors
         JOIN movies_directors md ON id=md.director_id
         JOIN movies m ON m.id=md.movie_id
WHERE m.name='Fight Club';

SELECT COUNT(*)
FROM movies m
         JOIN movies_directors md ON m.id=md.movie_id
         JOIN directors d ON d.id=md.director_id
WHERE d.first_name='Clint' && d.last_name='Eastwood';

SELECT DISTINCT first_name, last_name
FROM movies_directors md
         JOIN movies_genres mg ON md.movie_id=mg.movie_id
         JOIN directors d ON md.director_id=d.id
WHERE mg.genre='Horror';

SELECT a.first_name, a.last_name
FROM actors a
         JOIN roles r ON a.id=r.actor_id
         JOIN movies_directors md ON md.movie_id=r.movie_id
         JOIN directors d ON d.id= md.director_id
WHERE d.first_name='Christopher' && d.last_name='Nolan';