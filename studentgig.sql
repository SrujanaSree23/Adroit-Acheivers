

-- Users Table (students & startups)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    user_type ENUM('student', 'startup') DEFAULT 'student'
);

-- Gigs Table
CREATE TABLE gigs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    startup_name VARCHAR(100),
    gig_title VARCHAR(150),
    gig_description TEXT,
    skills_required VARCHAR(200),
    posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
