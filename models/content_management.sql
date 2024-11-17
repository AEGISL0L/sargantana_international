/**
 * This SQL script creates several tables related to content management:
 *
 * 1. `content_update_requests`: Stores information about requests to update content, including the user who made the request, the content being updated, the request details, and the status of the request.
 * 2. `review_assignments`: Stores information about which reviewers have been assigned to review a particular content update request, including the review status and the time the review was completed.
 * 3. `approval_records`: Stores information about the approval process for content update requests, including which approvers have approved or rejected the request and the time of the approval/rejection.
 * 4. `published_content`: Stores information about content that has been published, including the request that led to the publication, the publisher, and the time of publication.
 *
 * These tables provide a structured way to manage the content update process, including tracking requests, reviews, approvals, and publications.
 */
-- Content Update Requests Table
CREATE TABLE content_update_requests (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    content_id INT NOT NULL,
    request_details TEXT,
    status ENUM('pending', 'reviewed', 'approved', 'published') NOT NULL DEFAULT 'pending',
    requested_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Review Assignments Table
CREATE TABLE review_assignments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    request_id INT NOT NULL,
    reviewer_id INT NOT NULL,
    review_status ENUM('pending', 'completed') NOT NULL DEFAULT 'pending',
    comments TEXT,
    reviewed_at TIMESTAMP,
    FOREIGN KEY (request_id) REFERENCES content_update_requests(id),
    FOREIGN KEY (reviewer_id) REFERENCES users(id)
);

-- Approval Records Table
CREATE TABLE approval_records (
    id INT PRIMARY KEY AUTO_INCREMENT,
    request_id INT NOT NULL,
    approver_id INT NOT NULL,
    approval_status ENUM('pending', 'approved', 'rejected') NOT NULL DEFAULT 'pending',
    approved_at TIMESTAMP,
    FOREIGN KEY (request_id) REFERENCES content_update_requests(id),
    FOREIGN KEY (approver_id) REFERENCES users(id)
);

-- Published Content Table
CREATE TABLE published_content (
    id INT PRIMARY KEY AUTO_INCREMENT,
    request_id INT NOT NULL,
    publisher_id INT NOT NULL,
    published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (request_id) REFERENCES content_update_requests(id),
    FOREIGN KEY (publisher_id) REFERENCES users(id)
);
