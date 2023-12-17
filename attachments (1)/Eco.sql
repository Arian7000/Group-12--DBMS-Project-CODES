-- Table: User
CREATE TABLE User (
    UserID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Gender VARCHAR(10),
    DateOfBirth DATE,
    Age INT,
    Nationality VARCHAR(50),
    Email VARCHAR(100),
    Password VARCHAR(50),
    EID INT,
    MID INT,
    ContactNumber VARCHAR(15)
);

-- Table: EID
CREATE TABLE EID (
    WEID INT PRIMARY KEY,
    TEID INT,
    SEID INT
);

-- Table: MID
CREATE TABLE MID (
    DonationID INT PRIMARY KEY,
    TEID INT,
    FoundID INT,
    ReportID INT
);

-- Table: NEID
CREATE TABLE NEID (
    ResearchID INT PRIMARY KEY
);

-- Table: TEID
CREATE TABLE TEID (
    DonationID INT PRIMARY KEY,
    MEID INT,
    FELD INT,
    FundID INT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Amount DECIMAL(10, 2),
    OpeningDate DATE,
    ClosingDate DATE
);

-- Table: SEID
CREATE TABLE SEID (
    ReportID INT PRIMARY KEY,
    Source VARCHAR(50)
);

-- Table: DonationID
CREATE TABLE DonationID (
    MEID INT PRIMARY KEY,
    TELD INT,
    Date DATE,
    Time TIME,
    Amount DECIMAL(10, 2)
);

-- Table: ReportID
CREATE TABLE ReportID (
    ReportID INT PRIMARY KEY,
    Analysts VARCHAR(100),
    ResultsFindings VARCHAR(255),
    MEID INT,
    PLocationID INT,
    DataLD INT,
    RecordNumber INT,
    DateTime DATETIME
);

-- Table: FundID
CREATE TABLE FundID (
    FundID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Amount DECIMAL(10, 2),
    OpeningDate DATE,
    ClosingDate DATE,
    TED INT
);

-- Table: ResearchID
CREATE TABLE ResearchID (
    ResearchID INT PRIMARY KEY,
    StartingDates DATE,
    AuditingDate DATE,
    Budget DECIMAL(10, 2)
);

-- Relationships
ALTER TABLE User ADD FOREIGN KEY (EID) REFERENCES EID(WEID);

ALTER TABLE EID ADD FOREIGN KEY (TEID) REFERENCES TEID(DonationID);
ALTER TABLE EID ADD FOREIGN KEY (SEID) REFERENCES SEID(ReportID);
ALTER TABLE MID ADD FOREIGN KEY (TEID) REFERENCES TEID(DonationID);
ALTER TABLE MID ADD FOREIGN KEY (FoundID) REFERENCES FundID(FundID);
ALTER TABLE MID ADD FOREIGN KEY (ReportID) REFERENCES ReportID(ReportID);
ALTER TABLE NEID ADD FOREIGN KEY (ResearchID) REFERENCES ResearchID(ResearchID);
ALTER TABLE TEID ADD FOREIGN KEY (MEID) REFERENCES DonationID(MEID);
ALTER TABLE TEID ADD FOREIGN KEY (FELD) REFERENCES FundID(FundID);
ALTER TABLE TEID ADD FOREIGN KEY (FundID) REFERENCES FundID(FundID);
ALTER TABLE SEID ADD FOREIGN KEY (ReportID) REFERENCES ReportID(ReportID);
ALTER TABLE DonationID ADD FOREIGN KEY (MEID) REFERENCES DonationID(MEID);
ALTER TABLE DonationID ADD FOREIGN KEY (TELD) REFERENCES TEID(DonationID);
ALTER TABLE ReportID ADD FOREIGN KEY (MEID) REFERENCES DonationID(MEID);
ALTER TABLE ReportID ADD FOREIGN KEY (PLocationID) REFERENCES ResearchID(ResearchID);
ALTER TABLE ReportID ADD FOREIGN KEY (DataLD) REFERENCES TEID(DonationID);
ALTER TABLE FundID ADD FOREIGN KEY (TED) REFERENCES TEID(DonationID);
