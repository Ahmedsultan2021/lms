-- MySQL Script generated by MySQL Workbench
-- Wed Jan 12 00:15:34 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema udp
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema udp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `udp` DEFAULT CHARACTER SET utf8 ;
USE `udp` ;

-- -----------------------------------------------------
-- Table `udp`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `udp`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(256) NOT NULL,
  `email` VARCHAR(256) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `role` ENUM('professor', 'student', 'it') NOT NULL,
  `dapartment` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `udp`.`course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `udp`.`course` (
  `cource_code` VARCHAR(50) NOT NULL,
  `prof_id` INT NOT NULL,
  `credit_hour` INT NOT NULL,
  `available_seats` INT NOT NULL,
  `tutation` DECIMAL(7,3) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cource_code`),
  INDEX `fk_course_proff_id_idx` (`prof_id` ASC) ,
  CONSTRAINT `fk_course_proff_id`
    FOREIGN KEY (`prof_id`)
    REFERENCES `udp`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `udp`.`course_student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `udp`.`course_student` (
  `registration_no` INT NOT NULL,
  `student_id` INT NOT NULL,
  `course_code` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`registration_no`),
  INDEX `fk_course_student_user1_idx` (`student_id` ASC) ,
  INDEX `fk_course_student_course1_idx` (`course_code` ASC) ,
  CONSTRAINT `fk_course_student_user1`
    FOREIGN KEY (`student_id`)
    REFERENCES `udp`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_course_student_course1`
    FOREIGN KEY (`course_code`)
    REFERENCES `udp`.`course` (`cource_code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `udp`.`attendance`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `udp`.`attendance` (
  `id` INT NOT NULL,
  `session_date` DATETIME NULL,
  `attend` BIT NULL,
  `course_student_registration_no` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_attendance_course_student1_idx` (`course_student_registration_no` ASC) ,
  CONSTRAINT `fk_attendance_course_student1`
    FOREIGN KEY (`course_student_registration_no`)
    REFERENCES `udp`.`course_student` (`registration_no`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;