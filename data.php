<?php
include "includes/db.php"; 

$query = "INSERT INTO emp (name, email, phone, address) VALUES
('Rahul Kumar', 'rahul@example.com', '9876543210', 'Ranchi'),
('Pankaj Singh', 'pankaj@example.com', '9123456789', 'Kanke'),
('Neha Sharma', 'neha@example.com', '9988776655', 'Delhi'),
('Amit Verma', 'amit@example.com', '9001122334', 'Patna'),
('Sneha Gupta', 'sneha@example.com', '9112233445', 'Kolkata'),
('Ravi Yadav', 'ravi@example.com', '9876501234', 'Lucknow'),
('Priya Mehta', 'priya@example.com', '9123409876', 'Mumbai'),
('Arjun Das', 'arjun@example.com', '9988701234', 'Jaipur'),
('Kiran Joshi', 'kiran@example.com', '9876545678', 'Bhopal'),
('Sunita Rao', 'sunita@example.com', '9123456780', 'Hyderabad'),
('Deepak Malhotra', 'deepak@example.com', '9001122001', 'Chennai'),
('Meena Kumari', 'meena@example.com', '9112233446', 'Pune'),
('Vikas Sharma', 'vikas@example.com', '9876509876', 'Nagpur'),
('Anjali Singh', 'anjali@example.com', '9123401234', 'Indore'),
('Suresh Patel', 'suresh@example.com', '9988705678', 'Ahmedabad'),
('Ritika Jain', 'ritika@example.com', '9876543211', 'Surat'),
('Manoj Kumar', 'manoj@example.com', '9123456781', 'Varanasi'),
('Shalini Gupta', 'shalini@example.com', '9001122335', 'Noida'),
('Rajesh Reddy', 'rajesh@example.com', '9112233447', 'Secunderabad'),
('Komal Bhatia', 'komal@example.com', '9876501235', 'Faridabad'),
('Ashok Nair', 'ashok@example.com', '9123409877', 'Thiruvananthapuram'),
('Divya Kapoor', 'divya@example.com', '9988701235', 'Gurgaon'),
('Santosh Mishra', 'santosh@example.com', '9876545679', 'Kanpur'),
('Pooja Sinha', 'pooja@example.com', '9123456782', 'Bhubaneswar'),
('Nitin Saxena', 'nitin@example.com', '9001122336', 'Meerut'),
('Alok Pandey', 'alok@example.com', '9112233448', 'Gaya'),
('Geeta Kumari', 'geeta@example.com', '9876509877', 'Jamshedpur'),
('Harish Chandra', 'harish@example.com', '9123401235', 'Raipur'),
('Kavita Sharma', 'kavita@example.com', '9988705679', 'Udaipur'),
('Mohit Agarwal', 'mohit@example.com', '9876543212', 'Agra'),
('Ramesh Yadav', 'ramesh@example.com', '9123456783', 'Allahabad'),
('Seema Rani', 'seema@example.com', '9001122337', 'Chandigarh'),
('Ajay Kumar', 'ajay@example.com', '9112233449', 'Shimla'),
('Payal Singh', 'payal@example.com', '9876501236', 'Dehradun'),
('Vinod Tiwari', 'vinod@example.com', '9123409878', 'Bareilly'),
('Swati Chauhan', 'swati@example.com', '9988701236', 'Ghaziabad')";

if (mysqli_query($conn, $query)) {
    echo "sample data inserted successfully!";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
?>