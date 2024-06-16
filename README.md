# Timetable Generator

A web-based application for automatic timetable generation using genetic algorithms, designed for college faculty members.

## Features

- User login
- Session-based alerts
- Automatic timetable generation

## Prerequisites

- PHP 7.0+
- MySQL
- Web server (Apache, Nginx, etc.)

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/timetable-generator.git
   cd timetable-generator
   ```

2. Import the database:
   - Import `database.sql` into your MySQL database.

3. Configure the database connection:
   - Edit `connection_establishment.php` in `Html_folder\Php_folder\`.

4. Start the server:
   - Place files in your web server's root directory and start the server.

## Usage

1. Open your browser and navigate to:
   ```
   http://localhost/timetable-generator
   ```

2. Login with your credentials.

## File Structure

- `index.php`: Login page
- `rbac.php`: Authentication handler
- `connection_establishment.php`: Database connection
- `style.css`: Login page styling
- `database.sql`: Database setup

## License

This project is licensed under the MIT License.
