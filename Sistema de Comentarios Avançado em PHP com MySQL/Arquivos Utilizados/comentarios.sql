-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Mar 25, 2011 as 02:18 PM
-- Versão do Servidor: 5.0.45
-- Versão do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Banco de Dados: `sistema_comentarios`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `comentarios`
-- 

CREATE TABLE `comentarios` (
  `comentario_id` int(11) NOT NULL auto_increment,
  `comentario_nome` varchar(160) NOT NULL,
  `comentario_email` varchar(150) NOT NULL,
  `site` varchar(200) default NULL,
  `comentario` text NOT NULL,
  `comentario_data` varchar(10) NOT NULL,
  `comentario_hora` time NOT NULL,
  PRIMARY KEY  (`comentario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Extraindo dados da tabela `comentarios`
-- 

