-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema qrcodedb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema qrcodedb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `qrcodedb` DEFAULT CHARACTER SET utf8 ;
USE `qrcodedb` ;

-- -----------------------------------------------------
-- Table `qrcodedb`.`gerador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `qrcodedb`.`gerador` (
  `idgerador` INT NOT NULL AUTO_INCREMENT,
  `link` VARCHAR(500) NOT NULL,
  `qr` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idgerador`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
