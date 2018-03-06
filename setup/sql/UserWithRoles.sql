-- -----------------------------------------------------
-- Table `roletypes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `roletypes` (
  `roleTypeId` INT(11) NOT NULL AUTO_INCREMENT,
  `roleTypeName` VARCHAR(64) NOT NULL,
  `roleTypeInt` INT NOT NULL,
  PRIMARY KEY (`roleTypeId`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `userroles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `userroles` (
  `roleId` INT(11) NOT NULL AUTO_INCREMENT,
  `roleName` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`roleId`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` INT(11) NOT NULL AUTO_INCREMENT,
  `fkUserRole` INT(11) NOT NULL,
  `fkRoleType` INT(11) NOT NULL,
  PRIMARY KEY (`roleId`),
  INDEX `fk_userRole_idx` (`fkUserRole` ASC),
  INDEX `fk_roleType_idx` (`fkRoleType` ASC),
  CONSTRAINT `fk_roleType`
    FOREIGN KEY (`fkRoleType`)
    REFERENCES `roletypes` (`roleTypeId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_userRole`
    FOREIGN KEY (`fkUserRole`)
    REFERENCES `userroles` (`roleId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `userId` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(25) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `fullname` VARCHAR(45) NOT NULL,
  `userRole` INT(11) NOT NULL,
  `userEmail` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`userId`),
  INDEX `fkUserRole_idx` (`userRole` ASC),
  CONSTRAINT `fkUserRole`
    FOREIGN KEY (`userRole`)
    REFERENCES `userroles` (`roleId`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;
