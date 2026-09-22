# Hosting and Publishing a Website with a Database on AWS

A PHP and MySQL portfolio website deployed on an AWS EC2 Linux server using the LAMP stack.

## Project Overview

This project was completed as part of Internship Task 5 — Hosting and Publishing a Website with a Database on an AWS Linux Server.

The objective was to deploy a database-backed web application to a cloud Linux server and make it publicly accessible with a domain name and HTTPS.

The final application is a custom dark-themed portfolio website with a database-backed contact form.

## Features

- Responsive single-page portfolio website
- Projects, Skills, Experience, and Contact sections
- PHP-based backend
- MySQL database
- Database-backed contact form
- Contact submissions stored with:
  - Name
  - Email
  - Message
  - Timestamp
- HTTPS enabled using Let's Encrypt
- Public domain configured through DNS

## Technology Stack

### Frontend

- HTML5
- CSS3

### Backend

- PHP
- MySQLi

### Database

- MySQL

### Infrastructure

- AWS EC2
- Ubuntu Server
- Apache2
- Certbot / Let's Encrypt
- ClouDNS

## AWS Server Configuration

- Cloud Provider: AWS
- Service: EC2
- Instance Type: t3.micro
- Operating System: Ubuntu Server 26.04 LTS
- Storage: 8 GiB
- Web Server: Apache2
- Database: MySQL
- PHP: PHP 8.5

### Security Group

The EC2 security group was configured with:

- SSH — Port 22
- HTTP — Port 80
- HTTPS — Port 443

SSH access was restricted while HTTP and HTTPS were allowed for public website access.

## Application Architecture

The request flow is:

```text
Browser
    ↓
ClouDNS
    ↓
Apache over HTTPS
    ↓
PHP
    ↓
MySQL
```

## Project Structure

```text
aws-php-mysql-website/
│
├── website/
│   ├── index.php
│   ├── contact.php
│   ├── db.php
│   ├── database.sql
│   └── style.css
│
├── documentation/
├── screenshots/
├── Internship-Task-5.pdf
├── .gitignore
└── README.md
```

Git and GitHub practice project.
This repository demonstrates version control using Git and GitHub.
Branching practice.