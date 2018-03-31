CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci; USE
    `todolist`;
DROP TABLE IF EXISTS
    `todo`;
CREATE TABLE IF NOT EXISTS `todo`(
    `list_id` INT(11) NOT NULL AUTO_INCREMENT,
    `list_name` VARCHAR(50) NULL DEFAULT NULL,
    `task_id` INT(11) NULL DEFAULT NULL,
    `task_description` VARCHAR(50) NULL DEFAULT NULL,
    PRIMARY KEY(`list_id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 1;
INSERT INTO `todo`(
    `list_id`,
    `list_name`,
    `task_id`,
    `task_description`
)
VALUES(
    1,
    'First list',
    1,
    'IK BEN EEN TASK'
);
