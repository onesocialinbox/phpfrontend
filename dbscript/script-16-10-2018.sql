-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2018 at 09:57 PM
-- Server version: 10.3.8-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', 1, 1539513817),
('AppAdmin', 3, 1539534298),
('AppAdmin', 4, 1539705152);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
('/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//ajaxcrud', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//controller', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//crud', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//extension', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//form', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//index', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//model', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('//module', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/addressform/*', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/addressform/create', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/addressform/delete', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/addressform/index', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/addressform/update', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/addressform/view', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/asset/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/asset/compress', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/asset/template', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/cache/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/cache/flush', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/cache/flush-all', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/cache/flush-schema', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/cache/index', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/debug/*', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/debug/default/*', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/debug/default/db-explain', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/debug/default/download-mail', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/debug/default/index', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/debug/default/toolbar', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/debug/default/view', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/debug/user/*', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/debug/user/reset-identity', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/debug/user/set-identity', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/employmentform/*', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/employmentform/create', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/employmentform/delete', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/employmentform/index', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/employmentform/update', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/employmentform/view', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/enrollment-master/*', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/enrollment-master/create', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/enrollment-master/delete', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/enrollment-master/index', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/enrollment-master/update', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/enrollment-master/view', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/fixture/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/fixture/load', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/fixture/unload', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/hello/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/hello/index', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/help/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/help/index', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/help/list', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/help/list-action-options', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/help/usage', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/message/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/message/config', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/message/config-template', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/message/extract', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/create', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/down', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/fresh', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/history', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/mark', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/new', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/redo', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/to', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/migrate/up', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/rbac/*', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/assignment/*', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/assignment/assign', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/assignment/index', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/assignment/revoke', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/assignment/view', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/default/*', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/default/index', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/doc/*', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/doc/index', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/menu/*', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/menu/create', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/menu/delete', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/menu/index', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/menu/update', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/menu/view', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/permission/*', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/permission/assign', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/permission/create', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/permission/delete', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/permission/index', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/permission/remove', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/permission/update', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/permission/view', 3, NULL, NULL, NULL, 1539510642, 1539510642, NULL),
('/rbac/role/*', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/role/assign', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/role/create', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/role/delete', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/role/index', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/role/remove', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/role/update', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/role/view', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/route/*', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/route/assign', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/route/create', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/route/index', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/route/refresh', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/route/remove', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/rule/*', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/rule/create', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/rule/delete', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/rule/index', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/rule/update', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/rule/view', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/user/*', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/activate', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/change-password', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/delete', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/index', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/rbac/user/login', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/logout', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/request-password-reset', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/reset-password', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/signup', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/rbac/user/view', 3, NULL, NULL, NULL, 1539510641, 1539510641, NULL),
('/serve/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/serve/index', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/site/*', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/site/about', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/site/captcha', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/site/contact', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/site/error', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/site/index', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/site/login', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/site/logout', 3, NULL, NULL, NULL, 1539510636, 1539510636, NULL),
('/user-management/*', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1539510639, 1539510639, NULL),
('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1539510639, 1539510639, NULL),
('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1539510639, 1539510639, NULL),
('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1539510639, 1539510639, NULL),
('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1539510639, 1539510639, NULL),
('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1539510639, 1539510639, NULL),
('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1539510639, 1539510639, NULL),
('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/*', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/login', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/logout', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/auth/registration', 3, NULL, NULL, NULL, 1539510640, 1539510640, NULL),
('/user-management/permission/*', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/create', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/delete', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/index', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/update', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/permission/view', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/*', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/create', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/delete', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/role/index', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/update', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/role/view', 3, NULL, NULL, NULL, 1539510638, 1539510638, NULL),
('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user/*', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/change-password', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/create', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/delete', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user/index', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1539510637, 1539510637, NULL),
('/user-management/user/update', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/user-management/user/view', 3, NULL, NULL, NULL, 1539502303, 1539502303, NULL),
('/userbasicdetailsmaster/*', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userbasicdetailsmaster/create', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userbasicdetailsmaster/delete', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userbasicdetailsmaster/index', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userbasicdetailsmaster/update', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userbasicdetailsmaster/view', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userchecklist/*', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userchecklist/create', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userchecklist/delete', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userchecklist/index', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userchecklist/update', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userchecklist/view', 3, NULL, NULL, NULL, 1539535555, 1539535555, NULL),
('/userotherinformation/*', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userotherinformation/create', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userotherinformation/delete', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userotherinformation/index', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userotherinformation/update', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userotherinformation/view', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userschool/*', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userschool/create', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userschool/delete', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userschool/index', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userschool/update', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('/userschool/view', 3, NULL, NULL, NULL, 1539535554, 1539535554, NULL),
('Applicant', 1, 'Applicant', NULL, NULL, 1539502303, 1539705586, NULL),
('AllControllerAccess', 2, 'All Controller Access', NULL, NULL, 1539534346, 1539534346, 'AppAdmin'),
('AppAdmin', 1, 'Application Admin', NULL, NULL, 1539534028, 1539534129, NULL),
('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1539502303, 1539502303, 'userCommonPermissions'),
('changeUserPassword', 2, 'Change user password', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('commonPermission', 2, 'Common permission', NULL, NULL, 1539502299, 1539502299, NULL),
('createUsers', 2, 'Create users', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('deleteUsers', 2, 'Delete users', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('editUserEmail', 2, 'Edit user email', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('editUsers', 2, 'Edit users', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('viewUserEmail', 2, 'View user email', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('viewUserRoles', 2, 'View user roles', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('viewUsers', 2, 'View users', NULL, NULL, 1539502303, 1539502303, 'userManagement'),
('viewVisitLog', 2, 'View visit log', NULL, NULL, 1539502303, 1539502303, 'userManagement');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'deleteUsers'),
('Admin', 'editUsers'),
('Admin', 'viewUsers'),
('AllControllerAccess', '/addressform/*'),
('AllControllerAccess', '/employmentform/*'),
('AllControllerAccess', '/enrollment-master/*'),
('AllControllerAccess', '/site/*'),
('AllControllerAccess', '/userbasicdetailsmaster/*'),
('AllControllerAccess', '/userchecklist/*'),
('AllControllerAccess', '/userotherinformation/*'),
('AllControllerAccess', '/userschool/*'),
('AllControllerAccess', 'viewUsers'),
('AppAdmin', 'AllControllerAccess'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('assignRolesToUsers', 'viewUserRoles'),
('assignRolesToUsers', 'viewUsers'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('changeUserPassword', '/user-management/user/change-password'),
('changeUserPassword', 'viewUsers'),
('createUsers', '/user-management/user/create'),
('createUsers', 'viewUsers'),
('deleteUsers', '/user-management/user/bulk-delete'),
('deleteUsers', '/user-management/user/delete'),
('deleteUsers', 'viewUsers'),
('editUserEmail', 'viewUserEmail'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('editUsers', '/user-management/user/update'),
('editUsers', 'viewUsers'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('viewUsers', '/user-management/user/view');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('AppAdmin', 'Application Admin', 1539534235, 1539534235),
('enrollment-master', 'Enrollment Master', 1539510896, 1539510896),
('userCommonPermissions', 'User common permission', 1539502303, 1539502303),
('userManagement', 'User management', 1539502303, 1539502303);

-- --------------------------------------------------------

--
-- Table structure for table `employmentform`
--

CREATE TABLE `employmentform` (
  `id` int(11) NOT NULL,
  `companyname` varchar(40) NOT NULL,
  `lastworkingDate` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `natureofEmployment` varchar(10) NOT NULL,
  `yearsOfService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employmentform`
--

INSERT INTO `employmentform` (`id`, `companyname`, `lastworkingDate`, `city`, `natureofEmployment`, `yearsOfService`) VALUES
(1, 'dd', '0000-00-00', 'd', 'd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_master`
--

CREATE TABLE `enrollment_master` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `FatherName` varchar(40) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ApplicationFormId` varchar(20) NOT NULL,
  `chgd_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `chgd_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment_master`
--

INSERT INTO `enrollment_master` (`Id`, `Name`, `FatherName`, `DateOfBirth`, `Phone`, `Email`, `ApplicationFormId`, `chgd_dt`, `chgd_by`) VALUES
(1, 'Test', 'test', '1989-01-01', '1234567890', 'test@yopmail.com', '1234rtetsre', '2018-10-12 14:44:31', NULL),
(2, 'Test1', 'Test1', '1987-01-01', '1234567890', 'test1@yopmail.com', 'T001', '2018-10-14 22:18:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1539447562),
('m140506_102106_rbac_init', 1539448221),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1539448222),
('m180523_151638_rbac_updates_indexes_without_prefix', 1539448222),
('m140608_173539_create_user_table', 1539502295),
('m140611_133903_init_rbac', 1539502296),
('m140808_073114_create_auth_item_group_table', 1539502298),
('m140809_072112_insert_superadmin_to_user', 1539502299),
('m140809_073114_insert_common_permisison_to_auth_item', 1539502299),
('m141023_141535_create_user_visit_log', 1539502299),
('m141116_115804_add_bind_to_ip_and_registration_ip_to_user', 1539502300),
('m141121_194858_split_browser_and_os_column', 1539502301),
('m141201_220516_add_email_and_email_confirmed_to_user', 1539502302),
('m141207_001649_create_basic_user_permissions', 1539502303);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(6) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'superadmin', '5DwxeMAES67ubpsiC1LJYxai0SEkijFc', '$2y$13$hKSCyFjPatTpczf0FKewE.HTzc/NqLzjKZyU99xKAbVfydRTQyerm', NULL, 1, 1, 1539502299, 1539502299, NULL, NULL, NULL, 0),
(2, 'enroll', 'PCLvgWun_15zDSoAZtpfxGGYulzOtavw', '$2y$13$JYkxhr8AVCXcJvlUMZjZ1OKoX.0zwT4Mu5lNm9aSaOXAyqcjTIt6q', NULL, 1, 0, 1539511122, 1539511122, '::1', '', '', 0),
(3, 'admin', '3xYw78IeTXqjA-3n2ZutngWeI7L2IroV', '$2y$13$arp4IpemlpjbXegkXGJVuO4j28GAjtylyffkiGNaichgI7ExnvMpa', NULL, 1, 0, 1539533955, 1539533955, '::1', '', '', 0),
(4, 'ramya', 'Eg8Iz-9PcDZ6fdF3TyBYH2K5atA8oKdZ', '$2y$13$Cq2cvJgQasZBNTgnKwWfCORTAweoJwsF7HL9yXdMgunczYWoRFSxa', NULL, 1, 0, 1539704973, 1539704973, '45.112.20.194', '', 'rmramyait@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userbasicdetailsmaster`
--

CREATE TABLE `userbasicdetailsmaster` (
  `ID` int(11) NOT NULL,
  `AIBE` tinyint(1) NOT NULL,
  `AlternatePhoneNumber` varchar(10) NOT NULL,
  `community` varchar(10) NOT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `barAssociation` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `casePending` tinyint(1) NOT NULL,
  `convictionDetails` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `toBeMovedBy` varchar(40) NOT NULL,
  `uniqueGovtID` varchar(15) NOT NULL,
  `uniqueGovtId_type_cd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbasicdetailsmaster`
--

INSERT INTO `userbasicdetailsmaster` (`ID`, `AIBE`, `AlternatePhoneNumber`, `community`, `bloodGroup`, `barAssociation`, `gender`, `casePending`, `convictionDetails`, `remarks`, `toBeMovedBy`, `uniqueGovtID`, `uniqueGovtId_type_cd`) VALUES
(1, 1, '434234', 'ws', 'o+ive', 'test', 'male', 1, 'test', 'test', 'fes', '12321', '321312'),
(5, 12, '21413412', 'sf', 'ts', 'wer', 'fasd', 23, 'fas', 'sfa', 'dsf', '234', 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `userotherinformation`
--

CREATE TABLE `userotherinformation` (
  `ID` int(11) NOT NULL,
  `isQualifiedSec24` tinyint(1) NOT NULL,
  `previouslyApplied` tinyint(1) NOT NULL,
  `rejectReason` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `newspaperPublicationDate` date NOT NULL,
  `newspaperPublished` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userotherinformation`
--

INSERT INTO `userotherinformation` (`ID`, `isQualifiedSec24`, `previouslyApplied`, `rejectReason`, `newspaperPublicationDate`, `newspaperPublished`) VALUES
(1, 1, 1, 'test', '0000-00-00', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `USER_CHECKLIST_MASTER`
--

CREATE TABLE `USER_CHECKLIST_MASTER` (
  `ID` int(11) NOT NULL,
  `affidavitUploaded` tinyint(1) NOT NULL,
  `affidavitdocId` int(11) NOT NULL,
  `photoUploaded` tinyint(1) NOT NULL,
  `photoDocID` int(11) NOT NULL,
  `form1Uploaded` tinyint(1) NOT NULL,
  `form1DocID` int(11) NOT NULL,
  `form2Uploaded` tinyint(1) NOT NULL,
  `form2DocID` int(11) NOT NULL,
  `form3Uploaded` tinyint(1) NOT NULL,
  `form3DocID` int(11) NOT NULL,
  `form4Uploaded` tinyint(1) NOT NULL,
  `form4DocID` int(11) NOT NULL,
  `form5Uploaded` tinyint(1) NOT NULL,
  `form5DocID` int(11) NOT NULL,
  `form6Uploaded` tinyint(1) NOT NULL,
  `form6DocID` int(11) NOT NULL,
  `formRule40Uploaded` tinyint(1) NOT NULL,
  `formRule40DocID` int(11) NOT NULL,
  `provisionalCertification` tinyint(1) NOT NULL,
  `provisionalCertDocId` int(11) NOT NULL,
  `communityCertificate` tinyint(1) NOT NULL,
  `communityCertDocId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USER_CHECKLIST_MASTER`
--

INSERT INTO `USER_CHECKLIST_MASTER` (`ID`, `affidavitUploaded`, `affidavitdocId`, `photoUploaded`, `photoDocID`, `form1Uploaded`, `form1DocID`, `form2Uploaded`, `form2DocID`, `form3Uploaded`, `form3DocID`, `form4Uploaded`, `form4DocID`, `form5Uploaded`, `form5DocID`, `form6Uploaded`, `form6DocID`, `formRule40Uploaded`, `formRule40DocID`, `provisionalCertification`, `provisionalCertDocId`, `communityCertificate`, `communityCertDocId`) VALUES
(3, 1, 12321, 1, 213, 1, 123, 1, 123, 1, 123, 1, 123, 1, 123, 1, 123, 1, 123, 1, 213, 1, 213);

-- --------------------------------------------------------

--
-- Table structure for table `USER_COLLEGE_MASTER`
--

CREATE TABLE `USER_COLLEGE_MASTER` (
  `id` int(11) NOT NULL COMMENT 'user unique id',
  `degreeType` varchar(2) NOT NULL COMMENT 'PG/UG',
  `degree` varchar(10) NOT NULL COMMENT 'Name of Degree (BA /BE / Btech)',
  `year` date NOT NULL COMMENT 'Month and year',
  `university` varchar(50) NOT NULL COMMENT 'Name of university',
  `college` varchar(50) NOT NULL COMMENT 'Name of College',
  `specialization` varchar(20) NOT NULL COMMENT 'Type (IT, Arts, History)',
  `percentage` int(11) NOT NULL COMMENT 'Percentage'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `USER_LAW_ADDRESS_MASTER`
--

CREATE TABLE `USER_LAW_ADDRESS_MASTER` (
  `ID` int(11) NOT NULL COMMENT 'user unique id',
  `permanentAddress1` varchar(40) NOT NULL,
  `permanentAddress2` varchar(40) NOT NULL,
  `permanentAddress3` varchar(40) NOT NULL,
  `permanentAddress4` varchar(40) NOT NULL,
  `permanentCity` varchar(40) NOT NULL,
  `permanentState` varchar(20) NOT NULL,
  `permanentDistrict` varchar(30) NOT NULL,
  `permanentPincode` varchar(6) NOT NULL,
  `communicationAddress1` varchar(40) NOT NULL,
  `communicationAddress2` varchar(40) NOT NULL,
  `communicationAddress3` varchar(40) NOT NULL,
  `communicationAddress4` varchar(40) NOT NULL,
  `communicationCity` varchar(40) NOT NULL,
  `communicationState` varchar(20) NOT NULL,
  `communicationDistrict` varchar(30) NOT NULL,
  `communicationPincode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USER_LAW_ADDRESS_MASTER`
--

INSERT INTO `USER_LAW_ADDRESS_MASTER` (`ID`, `permanentAddress1`, `permanentAddress2`, `permanentAddress3`, `permanentAddress4`, `permanentCity`, `permanentState`, `permanentDistrict`, `permanentPincode`, `communicationAddress1`, `communicationAddress2`, `communicationAddress3`, `communicationAddress4`, `communicationCity`, `communicationState`, `communicationDistrict`, `communicationPincode`) VALUES
(1, 'No 113/23, Fivestar Appartments,Paadikup', '', 'Test1', 'Test2', 'Chennai', 'TamilNadu', 'Kanyakumari', '600040', 'No 113/23, Fivestar Appartments,Paadikup', 'Test', 'Test1', 'Test2', 'Chennai', 'TamilNadu', 'Kanyakumari', '600040'),
(2, 'anna nagar', 'chennai', '', '', 'Chennai', 'TamilNadu', 'chennai', '600040', 'SifyTest,SifyTest, SifyTest, SifyTest', '', '', '', 'Chennai', 'Tamil Nadu', 'chennai', '600040'),
(3, 'No 113/23, Fivestar Appartments', 'teste', 'tetst', 'Test2', 'Chennai', 'TamilNadu', 'rewr', '600040', 'SifyTest,SifyTest, SifyTest, SifyTest', 'Test', 'Test1', 'Test2', 'Chennai', 'Tamil Nadu', 'Kanyakumari', '600040'),
(4, 'test', 'test', 'tetst', 'Test2', 'Chennai', 'TamilNadu', 'rewr', '600040', 'test', 'Test', 'Test1', 'Test2', 'Chennai', 'TamilNadu', 'Kanyakumari', '600040');

-- --------------------------------------------------------

--
-- Table structure for table `USER_LAW_COLLEGE_MASTER`
--

CREATE TABLE `USER_LAW_COLLEGE_MASTER` (
  `id` int(11) NOT NULL,
  `lawDegree` varchar(10) NOT NULL,
  `lawUniversity` varchar(50) NOT NULL,
  `lawCollege` varchar(50) NOT NULL,
  `lawUniversityPlace` varchar(50) NOT NULL,
  `lawCollegePlace` varchar(20) NOT NULL,
  `lawYearOfPassing` date NOT NULL,
  `lawRollNo` varchar(10) NOT NULL,
  `lawCourseType` varchar(10) NOT NULL,
  `lawCourseDuration` int(2) NOT NULL,
  `provisionalCertNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `USER_SCHOOL_MASTER`
--

CREATE TABLE `USER_SCHOOL_MASTER` (
  `id` int(11) NOT NULL COMMENT 'user unique id',
  `sslcYear` date NOT NULL COMMENT 'Month and year',
  `sslcSchool` varchar(40) NOT NULL,
  `sslcMarks` int(11) NOT NULL COMMENT 'Percentage',
  `sslcBoard` varchar(10) NOT NULL,
  `hscYear` date NOT NULL COMMENT 'Month and year',
  `hscSchool` varchar(40) NOT NULL,
  `hscMarks` int(11) NOT NULL COMMENT 'Percentage',
  `hscBoard` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USER_SCHOOL_MASTER`
--

INSERT INTO `USER_SCHOOL_MASTER` (`id`, `sslcYear`, `sslcSchool`, `sslcMarks`, `sslcBoard`, `hscYear`, `hscSchool`, `hscMarks`, `hscBoard`) VALUES
(1, '2004-07-05', 'test', 233, 'test', '2006-07-05', 'test', 255, 'tset'),
(2, '2018-12-12', 'test', 455, 'tn', '2018-12-12', 'three', 255, 'tn'),
(3, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 459, 'tn'),
(4, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 459, 'tn'),
(5, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 459, 'tn'),
(6, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 459, 'tn'),
(7, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 459, 'tn'),
(8, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 459, 'tn'),
(9, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 466, 'tn'),
(10, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 466, 'tn'),
(11, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 466, 'tn'),
(12, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 466, 'tn'),
(13, '2018-12-12', 'lms', 455, 'tn', '2018-12-12', 'lms', 466, 'tn');

-- --------------------------------------------------------

--
-- Table structure for table `USER_STATUS_MASTER`
--

CREATE TABLE `USER_STATUS_MASTER` (
  `ID` int(11) NOT NULL COMMENT 'user unique id',
  `enrollmentStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `applicationStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `vmsStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `documentVerificationStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `directCallStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `bgVerificationStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `idCreationStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `paymentStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values',
  `secretaryCallStatus_cd` int(11) NOT NULL COMMENT 'Refer data sheet for values'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USER_STATUS_MASTER`
--

INSERT INTO `USER_STATUS_MASTER` (`ID`, `enrollmentStatus_cd`, `applicationStatus_cd`, `vmsStatus_cd`, `documentVerificationStatus_cd`, `directCallStatus_cd`, `bgVerificationStatus_cd`, `idCreationStatus_cd`, `paymentStatus_cd`, `secretaryCallStatus_cd`) VALUES
(1, 100, 100, 123, 234, 453, 564, 645, 345, 342);

-- --------------------------------------------------------

--
-- Table structure for table `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
(1, '5bc2f47c792ff', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539503228, 'Chrome', 'Windows'),
(2, '5bc30ea17aec8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539509921, 'Chrome', 'Windows'),
(3, '5bc30ebf5e44e', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539509951, 'Chrome', 'Windows'),
(4, '5bc30f6972cfc', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539510121, 'Chrome', 'Windows'),
(5, '5bc30fe9e26da', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539510249, 'Chrome', 'Windows'),
(6, '5bc31016503e4', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539510294, 'Chrome', 'Windows'),
(7, '5bc313d84fddc', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539511256, 'Chrome', 'Windows'),
(8, '5bc3149420959', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539511444, 'Chrome', 'Windows'),
(9, '5bc31777e936a', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539512183, 'Chrome', 'Windows'),
(10, '5bc3180d72c37', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539512333, 'Chrome', 'Windows'),
(11, '5bc31832ba087', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539512370, 'Chrome', 'Windows'),
(12, '5bc318b7dbda4', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539512503, 'Chrome', 'Windows'),
(13, '5bc318e4b9be2', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539512548, 'Chrome', 'Windows'),
(14, '5bc31923aec47', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539512611, 'Chrome', 'Windows'),
(15, '5bc31960e1108', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539512672, 'Chrome', 'Windows'),
(16, '5bc31bb3baea9', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539513267, 'Chrome', 'Windows'),
(17, '5bc31f92656cd', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539514258, 'Chrome', 'Windows'),
(18, '5bc31fa66550b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539514278, 'Chrome', 'Windows'),
(19, '5bc36ba1ec2b8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539533729, 'Chrome', 'Windows'),
(20, '5bc36c6529684', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539533925, 'Chrome', 'Windows'),
(21, '5bc36ea8d1f7f', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 3, 1539534504, 'Chrome', 'Windows'),
(22, '5bc370890b7a7', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539534985, 'Chrome', 'Windows'),
(23, '5bc371875f7e1', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 3, 1539535239, 'Chrome', 'Windows'),
(24, '5bc371de77a04', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539535326, 'Chrome', 'Windows'),
(25, '5bc3724a2ff13', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 3, 1539535434, 'Chrome', 'Windows'),
(26, '5bc37329ef124', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 3, 1539535657, 'Chrome', 'Windows'),
(27, '5bc3742db8f70', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 3, 1539535917, 'Chrome', 'Windows'),
(28, '5bc4de52b6748', '157.50.84.233', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 3, 1539628626, 'Chrome', 'Windows'),
(29, '5bc549af66887', '45.112.20.194', 'en', 'Mozilla/5.0 (Linux; Android 6.0.1; ONEPLUS A3003 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36', 3, 1539656111, 'Chrome', 'Android'),
(30, '5bc54a20110ee', '45.112.20.194', 'en', 'Mozilla/5.0 (Linux; Android 6.0.1; ONEPLUS A3003 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36', 1, 1539656224, 'Chrome', 'Android'),
(31, '5bc54b4a8b688', '45.112.20.194', 'en', 'Mozilla/5.0 (Linux; Android 6.0.1; ONEPLUS A3003 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36', 3, 1539656522, 'Chrome', 'Android'),
(32, '5bc554d7e8997', '45.112.20.194', 'en', 'Mozilla/5.0 (Linux; Android 6.0.1; ONEPLUS A3003 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36', 2, 1539658967, 'Chrome', 'Android'),
(33, '5bc554f1540bb', '45.112.20.194', 'en', 'Mozilla/5.0 (Linux; Android 6.0.1; ONEPLUS A3003 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36', 3, 1539658993, 'Chrome', 'Android'),
(34, '5bc5ddf0d3b83', '42.111.157.95', 'en', 'Mozilla/5.0 (Linux; U; Android 7.1.2; en-in; Redmi 4 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.2', 3, 1539694064, 'Chrome', 'Android'),
(35, '5bc60544ab8c6', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 2, 1539704132, 'Chrome', 'Windows'),
(36, '5bc60563b71fb', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 3, 1539704163, 'Chrome', 'Windows'),
(37, '5bc6058828894', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539704200, 'Chrome', 'Windows'),
(38, '5bc608e7912ad', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 4, 1539705063, 'Chrome', 'Windows'),
(39, '5bc60906798f7', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 4, 1539705094, 'Chrome', 'Windows'),
(40, '5bc60932717c6', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539705138, 'Chrome', 'Windows'),
(41, '5bc60958579b3', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 4, 1539705176, 'Chrome', 'Windows'),
(42, '5bc609b25c163', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539705266, 'Chrome', 'Windows'),
(43, '5bc60a9f9b0be', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 4, 1539705503, 'Chrome', 'Windows'),
(44, '5bc60acec5fe9', '45.112.20.194', 'en', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 1, 1539705550, 'Chrome', 'Windows'),
(45, '5bc614b0eddde', '49.206.114.115', 'en', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 3, 1539708080, 'Chrome', 'Windows'),
(46, '5bc619e741cc5', '157.50.99.101', 'en', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_2_5 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) CriOS/67.0.3396.69 Mobile/15D60 Safari/604.1', 1, 1539709415, 'iPhone', 'iPhone'),
(47, '5bc62f8877f54', '::1', 'en', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 4, 1539714952, 'Chrome', 'mac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `employmentform`
--
ALTER TABLE `employmentform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment_master`
--
ALTER TABLE `enrollment_master`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbasicdetailsmaster`
--
ALTER TABLE `userbasicdetailsmaster`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USER_CHECKLIST_MASTER`
--
ALTER TABLE `USER_CHECKLIST_MASTER`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USER_COLLEGE_MASTER`
--
ALTER TABLE `USER_COLLEGE_MASTER`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `USER_LAW_ADDRESS_MASTER`
--
ALTER TABLE `USER_LAW_ADDRESS_MASTER`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `USER_LAW_COLLEGE_MASTER`
--
ALTER TABLE `USER_LAW_COLLEGE_MASTER`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `USER_SCHOOL_MASTER`
--
ALTER TABLE `USER_SCHOOL_MASTER`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `USER_STATUS_MASTER`
--
ALTER TABLE `USER_STATUS_MASTER`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollment_master`
--
ALTER TABLE `enrollment_master`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `USER_COLLEGE_MASTER`
--
ALTER TABLE `USER_COLLEGE_MASTER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user unique id';

--
-- AUTO_INCREMENT for table `USER_LAW_ADDRESS_MASTER`
--
ALTER TABLE `USER_LAW_ADDRESS_MASTER`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user unique id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `USER_LAW_COLLEGE_MASTER`
--
ALTER TABLE `USER_LAW_COLLEGE_MASTER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `USER_SCHOOL_MASTER`
--
ALTER TABLE `USER_SCHOOL_MASTER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user unique id', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `USER_STATUS_MASTER`
--
ALTER TABLE `USER_STATUS_MASTER`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user unique id', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
