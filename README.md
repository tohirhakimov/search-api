
# PHP Developer Test
## Task
### API 
Using the provided CSV data, create an API route using Laravel that allows the data to be searched. 
The data should be converted to a database table. Provide Laravel migrations and seeders within the project. 
The API should search on: 
- Name: Should also match on partial names
- Bedrooms: Exact match
- Bathrooms: Exact match 
- Storeys: Exact match 
- Garages: Exact match 
- Price: Range (between $X and $Y) 
 
All search parameters should be optional, we should be able to search for 2 bedroom houses, or 4 bedroom and 2 bathroom houses, etc. 
 
The API should return JSON, with pure numeric data (not HTML content). 
 
### Frontend (Search Form) 
 
Create a basic search form that will query the API using AJAX and display the results it receives from the backend. The searching result should be rendering to HTML table dynamically on the frontend, using reactive Vue.js

There should be some sort of searching indicator, a spinning icon or similar. 
 
A message should be displayed if no results were found. 

## Installation
- clone project and change directory to project folder
- run `cp .env.example .env` and configure database
- run `composer install`
- run `npm install && npm run dev`
- run `php artisan key:generate && php artisan migrate && php artisan seed`
