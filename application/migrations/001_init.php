<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_Init extends CI_Migration{
    public function up(){
        $sql=<<<SQL

        -- Created by Vertabelo (http://vertabelo.com)
        -- Last modification date: 2018-09-02 03:00:33.788

        -- tables
        -- Table: M_LEVEL
        CREATE TABLE M_LEVEL (
            LEVEL_ID int  NOT NULL,
            LEVEL_NAME varchar(25) NULL,
            CONSTRAINT M_LEVEL_pk PRIMARY KEY (LEVEL_ID)
        );

        -- Table: M_USER
        CREATE TABLE M_USER (
            USER_ID serial  NOT NULL,
            USER_NAME varchar(25) NULL,
            EMAIL varchar(255) NULL,
            PASSWORD varchar(25) NULL,
            BIRTH_DATE varchar(10) NULL,
            GENDER varchar(15) NULL,
            PHONE_NUMBER int NULL,
            ADDRESS varchar(255) NULL,
            ADMIN_FLAG char(1) NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT M_USER_pk PRIMARY KEY (USER_ID)
        );

        -- Table: TBL_ANSWER
        CREATE TABLE TBL_ANSWER (
            ANSWER_ID serial  NOT NULL,
            QUESTION_ID serial NOT NULL,
            USER_ID serial NOT NULL,
            ANSWER_NUMBER int NULL,
            ANSWER_NAME text NULL,
            ANSWER_RESULT int NULL,
            CONSTRAINT TBL_ANSWER_pk PRIMARY KEY (ANSWER_ID)
        );

        -- Table: TBL_ANSWER_QA
        CREATE TABLE TBL_ANSWER_QA (
            ANSWER_QA_ID serial  NOT NULL,
            ANSWER_QA_NAME text NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_ANSWER_QA_pk PRIMARY KEY (ANSWER_QA_ID)
        );

        -- Table: TBL_EXAM
        CREATE TABLE TBL_EXAM (
            EXAM_ID serial  NOT NULL,
            LEVEL_ID int  NOT NULL,
            QUESTION_ID serial  NOT NULL,
            EXAM_NAME varchar(50) NULL,
            NUMERICAL_NAME char(2) NULL,
            CONSTRAINT TBL_EXAM_pk PRIMARY KEY (EXAM_ID)
        );

        -- Table: TBL_GRAMMAR
        CREATE TABLE TBL_GRAMMAR (
            GRAMMAR_ID serial  NOT NULL,
            LEVEL_ID int  NOT NULL,
            GRAMMAR_NAME varchar(50) NULL,
            GRAMMAR_DETAILS text NULL,
            DEL_FLAG char(1) NULL,
            CONSTRAINT TBL_GRAMMAR_pk PRIMARY KEY (GRAMMAR_ID)
        );

        -- Table: TBL_LEARN_VOCABULARY
        CREATE TABLE TBL_LEARN_VOCABULARY (
            LEARN_VOCABULARY_ID serial  NOT NULL,
            LEVEL_ID int  NOT NULL,
            VOCABULARY_NAME varchar(20) NULL,
            START_DATE date NULL,
            END_DATE date NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_LEARN_VOCABULARY_pk PRIMARY KEY (LEARN_VOCABULARY_ID)
        );

        -- Table: TBL_LISTENING
        CREATE TABLE TBL_LISTENING (
            LISTENING_ID serial  NOT NULL,
            LEVEL_ID int  NOT NULL,
            LISTENING_NAME varchar(50) NULL,
            LINK_MEDIA text NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_LISTENING_pk PRIMARY KEY (LISTENING_ID)
        );

        -- Table: TBL_MARK
        CREATE TABLE TBL_MARK (
            QUESTION_ID serial  NOT NULL,
            MARK int NULL
        );

        -- Table: TBL_QA
        CREATE TABLE TBL_QA (
            QA_ID serial  NOT NULL,
            USER_ID serial  NOT NULL,
            QA_ANSWER_ID serial  NOT NULL,
            QA_QUESTION_ID serial  NOT NULL,
            CONSTRAINT TBL_QA_pk PRIMARY KEY (QA_ID)
        );

        -- Table: TBL_QUESTION
        CREATE TABLE TBL_QUESTION (
            QUESTION_ID serial  NOT NULL,
            NUMBER_QUESTION int NULL,
            EXAM_ID serial  NOT NULL,
            QUESTION_NAME varchar(255) NULL,
            QUESTION_SUBTEXT text NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_QUESTION_pk PRIMARY KEY (QUESTION_ID)
        );

        -- Table: TBL_QUESTION_QA
        CREATE TABLE TBL_QUESTION_QA (
            QUESTION_QA_ID serial  NOT NULL,
            QUESTION_QA_NAME text NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_QUESTION_QA_pk PRIMARY KEY (QUESTION_QA_ID)
        );

        -- Table: TBL_RESULT_USER_CHOICE_ANSWER
        CREATE TABLE TBL_RESULT_USER_CHOICE_ANSWER (
            ANSWER_ID serial  NOT NULL,
            RESULT_USER_CHOICE_ANSWER int NULL
        );

        -- Table: TBL_USER_MARK
        CREATE TABLE TBL_USER_MARK (
            USER_ID serial  NOT NULL,
            QUESTION_ID serial  NOT NULL,
            USER_MARK int NULL
        );

        -- Table: TBL_VOCABULARY_PICTURE
        CREATE TABLE TBL_VOCABULARY_PICTURE (
            VOCABULARY_PICTURE_ID serial  NOT NULL,
            VOCABULARY_NAME varchar(25) NULL,
            VOCABULARY_LINK_PICTURE text NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_VOCABULARY_PICTURE_pk PRIMARY KEY (VOCABULARY_PICTURE_ID)
        );

        -- Table: TBL_WORD_DICTIONARY
        CREATE TABLE TBL_WORD_DICTIONARY (
            WORD_ID serial  NOT NULL,
            WORD_NAME varchar(20) NULL,
            WORD_DETAILS text NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_WORD_DICTIONARY_pk PRIMARY KEY (WORD_ID)
        );

        -- Table: TBL_WORD_HISTORY_USER
        CREATE TABLE TBL_WORD_HISTORY_USER (
            WORD_HISTORY_USER_ID serial  NOT NULL,
            USER_ID serial  NOT NULL,
            WORD_ID serial  NOT NULL,
            WORD_NAME varchar(20) NULL,
            DEL_FG char(1) NULL,
            CONSTRAINT TBL_WORD_HISTORY_USER_pk PRIMARY KEY (WORD_HISTORY_USER_ID)
        );

        -- foreign keys
        -- Reference: TBL_ANSWER_M_USER (table: TBL_ANSWER)
        ALTER TABLE TBL_ANSWER ADD CONSTRAINT TBL_ANSWER_M_USER
            FOREIGN KEY (USER_ID)
            REFERENCES M_USER (USER_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_ANSWER_TBL_QUESTION (table: TBL_ANSWER)
        ALTER TABLE TBL_ANSWER ADD CONSTRAINT TBL_ANSWER_TBL_QUESTION
            FOREIGN KEY (QUESTION_ID)
            REFERENCES TBL_QUESTION (QUESTION_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_EXAM_M_LEVEL (table: TBL_EXAM)
        ALTER TABLE TBL_EXAM ADD CONSTRAINT TBL_EXAM_M_LEVEL
            FOREIGN KEY (LEVEL_ID)
            REFERENCES M_LEVEL (LEVEL_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_EXAM_TBL_QUESTION (table: TBL_EXAM)
        ALTER TABLE TBL_EXAM ADD CONSTRAINT TBL_EXAM_TBL_QUESTION
            FOREIGN KEY (QUESTION_ID)
            REFERENCES TBL_QUESTION (QUESTION_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_GRAMMAR_M_LEVEL (table: TBL_GRAMMAR)
        ALTER TABLE TBL_GRAMMAR ADD CONSTRAINT TBL_GRAMMAR_M_LEVEL
            FOREIGN KEY (LEVEL_ID)
            REFERENCES M_LEVEL (LEVEL_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_LEARN_VOCABULARY_M_LEVEL (table: TBL_LEARN_VOCABULARY)
        ALTER TABLE TBL_LEARN_VOCABULARY ADD CONSTRAINT TBL_LEARN_VOCABULARY_M_LEVEL
            FOREIGN KEY (LEVEL_ID)
            REFERENCES M_LEVEL (LEVEL_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_LISTENING_M_LEVEL (table: TBL_LISTENING)
        ALTER TABLE TBL_LISTENING ADD CONSTRAINT TBL_LISTENING_M_LEVEL
            FOREIGN KEY (LEVEL_ID)
            REFERENCES M_LEVEL (LEVEL_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_MARK_TBL_QUESTION (table: TBL_MARK)
        ALTER TABLE TBL_MARK ADD CONSTRAINT TBL_MARK_TBL_QUESTION
            FOREIGN KEY (QUESTION_ID)
            REFERENCES TBL_QUESTION (QUESTION_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_QA_M_USER (table: TBL_QA)
        ALTER TABLE TBL_QA ADD CONSTRAINT TBL_QA_M_USER
            FOREIGN KEY (USER_ID)
            REFERENCES M_USER (USER_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_QA_TBL_ANSWER_QA (table: TBL_QA)
        ALTER TABLE TBL_QA ADD CONSTRAINT TBL_QA_TBL_ANSWER_QA
            FOREIGN KEY (QA_ANSWER_ID)
            REFERENCES TBL_ANSWER_QA (ANSWER_QA_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_QA_TBL_QUESTION_QA (table: TBL_QA)
        ALTER TABLE TBL_QA ADD CONSTRAINT TBL_QA_TBL_QUESTION_QA
            FOREIGN KEY (QA_QUESTION_ID)
            REFERENCES TBL_QUESTION_QA (QUESTION_QA_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_RESULT_USER_CHOICE_ANSWER_TBL_ANSWER (table: TBL_RESULT_USER_CHOICE_ANSWER)
        ALTER TABLE TBL_RESULT_USER_CHOICE_ANSWER ADD CONSTRAINT TBL_RESULT_USER_CHOICE_ANSWER_TBL_ANSWER
            FOREIGN KEY (ANSWER_ID)
            REFERENCES TBL_ANSWER (ANSWER_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_USER_MARK_M_USER (table: TBL_USER_MARK)
        ALTER TABLE TBL_USER_MARK ADD CONSTRAINT TBL_USER_MARK_M_USER
            FOREIGN KEY (USER_ID)
            REFERENCES M_USER (USER_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_USER_MARK_TBL_QUESTION (table: TBL_USER_MARK)
        ALTER TABLE TBL_USER_MARK ADD CONSTRAINT TBL_USER_MARK_TBL_QUESTION
            FOREIGN KEY (QUESTION_ID)
            REFERENCES TBL_QUESTION (QUESTION_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_WORD_HISTORY_USER_M_USER (table: TBL_WORD_HISTORY_USER)
        ALTER TABLE TBL_WORD_HISTORY_USER ADD CONSTRAINT TBL_WORD_HISTORY_USER_M_USER
            FOREIGN KEY (USER_ID)
            REFERENCES M_USER (USER_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;

        -- Reference: TBL_WORD_HISTORY_USER_TBL_WORD_DICTIONARY (table: TBL_WORD_HISTORY_USER)
        ALTER TABLE TBL_WORD_HISTORY_USER ADD CONSTRAINT TBL_WORD_HISTORY_USER_TBL_WORD_DICTIONARY
            FOREIGN KEY (WORD_ID)
            REFERENCES TBL_WORD_DICTIONARY (WORD_ID)  
            NOT DEFERRABLE 
            INITIALLY IMMEDIATE
        ;
-- End of file.
SQL;
       echo  $this->db->query($sql);
    }

    public function down()
    {
        $sql = <<<SQL
        DROP SCHEMA public CASCADE;
        CREATE SCHEMA public;
SQL;
        echo $this->db->query($sql);
    }
}