<?php

function validateForm($data) {
    $errors = array();

    if (empty($data['project_name'])) {
        $errors[] = "Project name is required.";
    }

    if (empty($data['project_description'])) {
        $errors[] = "Project description is required.";
    }

   

    return $errors;
}

function connectDatabase() {
    $dbHost = 'localhost';
    $dbUsername = 'contact_db';
    $dbPassword = '';
    $dbName = '';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function insertProject($data) {
    $conn = connectDatabase();

    $projectName = $data['project_name'];
    $projectDescription = $data['project_description'];

    $stmt = $conn->prepare("INSERT INTO projects (project_name, project_description) VALUES (?, ?)");
    $stmt->bind_param("ss", $projectName, $projectDescription);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function getProjects() {
    $conn = connectDatabase();

    $result = $conn->query("SELECT * FROM projects");

    $projects = array();

    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }

    return $projects;
}

function updateProject($data) {
    $conn = connectDatabase();

    $projectId = $data['project_id'];
    $projectName = $data['project_name'];
    $projectDescription = $data['project_description'];

    $stmt = $conn->prepare("UPDATE projects SET project_name = ?, project_description = ? WHERE id = ?");
    $stmt->bind_param("ssi", $projectName, $projectDescription, $projectId);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function deleteProject($projectId) {
    $conn = connectDatabase();

    $stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
    $stmt->bind_param("i", $projectId);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}