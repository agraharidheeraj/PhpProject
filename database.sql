CREATE TABLE contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    full_name VARCHAR(225) NOT NULL ,
    phone_number VARCHAR(15) NOT NULL ,
    email VARCHAR(255) NOT NULL ,
    subject VARCHAR(255) NOT NULL ,
    message TEXT NOT NULL ,
    ip.address VARCHAR(50) NOT NULL ,
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
