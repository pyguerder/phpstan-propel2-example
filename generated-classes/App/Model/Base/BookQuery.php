<?php

namespace App\Model\Base;

use \Exception;
use \PDO;
use App\Model\Book as ChildBook;
use App\Model\BookQuery as ChildBookQuery;
use App\Model\Map\BookTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'book' table.
 *
 *
 *
 * @method     ChildBookQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildBookQuery orderByField01($order = Criteria::ASC) Order by the field_01 column
 * @method     ChildBookQuery orderByField02($order = Criteria::ASC) Order by the field_02 column
 * @method     ChildBookQuery orderByField03($order = Criteria::ASC) Order by the field_03 column
 * @method     ChildBookQuery orderByField04($order = Criteria::ASC) Order by the field_04 column
 * @method     ChildBookQuery orderByField05($order = Criteria::ASC) Order by the field_05 column
 * @method     ChildBookQuery orderByField06($order = Criteria::ASC) Order by the field_06 column
 * @method     ChildBookQuery orderByField07($order = Criteria::ASC) Order by the field_07 column
 * @method     ChildBookQuery orderByField08($order = Criteria::ASC) Order by the field_08 column
 * @method     ChildBookQuery orderByField09($order = Criteria::ASC) Order by the field_09 column
 * @method     ChildBookQuery orderByField10($order = Criteria::ASC) Order by the field_10 column
 * @method     ChildBookQuery orderByField11($order = Criteria::ASC) Order by the field_11 column
 * @method     ChildBookQuery orderByField12($order = Criteria::ASC) Order by the field_12 column
 * @method     ChildBookQuery orderByField13($order = Criteria::ASC) Order by the field_13 column
 * @method     ChildBookQuery orderByField14($order = Criteria::ASC) Order by the field_14 column
 * @method     ChildBookQuery orderByField15($order = Criteria::ASC) Order by the field_15 column
 * @method     ChildBookQuery orderByField16($order = Criteria::ASC) Order by the field_16 column
 * @method     ChildBookQuery orderByField17($order = Criteria::ASC) Order by the field_17 column
 * @method     ChildBookQuery orderByField18($order = Criteria::ASC) Order by the field_18 column
 * @method     ChildBookQuery orderByField19($order = Criteria::ASC) Order by the field_19 column
 * @method     ChildBookQuery orderByField20($order = Criteria::ASC) Order by the field_20 column
 * @method     ChildBookQuery orderByField21($order = Criteria::ASC) Order by the field_21 column
 * @method     ChildBookQuery orderByField22($order = Criteria::ASC) Order by the field_22 column
 * @method     ChildBookQuery orderByField23($order = Criteria::ASC) Order by the field_23 column
 * @method     ChildBookQuery orderByField24($order = Criteria::ASC) Order by the field_24 column
 * @method     ChildBookQuery orderByField25($order = Criteria::ASC) Order by the field_25 column
 * @method     ChildBookQuery orderByField26($order = Criteria::ASC) Order by the field_26 column
 * @method     ChildBookQuery orderByField27($order = Criteria::ASC) Order by the field_27 column
 * @method     ChildBookQuery orderByField28($order = Criteria::ASC) Order by the field_28 column
 * @method     ChildBookQuery orderByField29($order = Criteria::ASC) Order by the field_29 column
 * @method     ChildBookQuery orderByField30($order = Criteria::ASC) Order by the field_30 column
 * @method     ChildBookQuery orderByField31($order = Criteria::ASC) Order by the field_31 column
 * @method     ChildBookQuery orderByField32($order = Criteria::ASC) Order by the field_32 column
 * @method     ChildBookQuery orderByField33($order = Criteria::ASC) Order by the field_33 column
 * @method     ChildBookQuery orderByField34($order = Criteria::ASC) Order by the field_34 column
 * @method     ChildBookQuery orderByField35($order = Criteria::ASC) Order by the field_35 column
 * @method     ChildBookQuery orderByField36($order = Criteria::ASC) Order by the field_36 column
 * @method     ChildBookQuery orderByField37($order = Criteria::ASC) Order by the field_37 column
 * @method     ChildBookQuery orderByField38($order = Criteria::ASC) Order by the field_38 column
 * @method     ChildBookQuery orderByField39($order = Criteria::ASC) Order by the field_39 column
 * @method     ChildBookQuery orderByField40($order = Criteria::ASC) Order by the field_40 column
 * @method     ChildBookQuery orderByField41($order = Criteria::ASC) Order by the field_41 column
 * @method     ChildBookQuery orderByField42($order = Criteria::ASC) Order by the field_42 column
 * @method     ChildBookQuery orderByField43($order = Criteria::ASC) Order by the field_43 column
 * @method     ChildBookQuery orderByField44($order = Criteria::ASC) Order by the field_44 column
 * @method     ChildBookQuery orderByField45($order = Criteria::ASC) Order by the field_45 column
 * @method     ChildBookQuery orderByField46($order = Criteria::ASC) Order by the field_46 column
 * @method     ChildBookQuery orderByField47($order = Criteria::ASC) Order by the field_47 column
 * @method     ChildBookQuery orderByField48($order = Criteria::ASC) Order by the field_48 column
 * @method     ChildBookQuery orderByField49($order = Criteria::ASC) Order by the field_49 column
 * @method     ChildBookQuery orderByField50($order = Criteria::ASC) Order by the field_50 column
 *
 * @method     ChildBookQuery groupById() Group by the id column
 * @method     ChildBookQuery groupByField01() Group by the field_01 column
 * @method     ChildBookQuery groupByField02() Group by the field_02 column
 * @method     ChildBookQuery groupByField03() Group by the field_03 column
 * @method     ChildBookQuery groupByField04() Group by the field_04 column
 * @method     ChildBookQuery groupByField05() Group by the field_05 column
 * @method     ChildBookQuery groupByField06() Group by the field_06 column
 * @method     ChildBookQuery groupByField07() Group by the field_07 column
 * @method     ChildBookQuery groupByField08() Group by the field_08 column
 * @method     ChildBookQuery groupByField09() Group by the field_09 column
 * @method     ChildBookQuery groupByField10() Group by the field_10 column
 * @method     ChildBookQuery groupByField11() Group by the field_11 column
 * @method     ChildBookQuery groupByField12() Group by the field_12 column
 * @method     ChildBookQuery groupByField13() Group by the field_13 column
 * @method     ChildBookQuery groupByField14() Group by the field_14 column
 * @method     ChildBookQuery groupByField15() Group by the field_15 column
 * @method     ChildBookQuery groupByField16() Group by the field_16 column
 * @method     ChildBookQuery groupByField17() Group by the field_17 column
 * @method     ChildBookQuery groupByField18() Group by the field_18 column
 * @method     ChildBookQuery groupByField19() Group by the field_19 column
 * @method     ChildBookQuery groupByField20() Group by the field_20 column
 * @method     ChildBookQuery groupByField21() Group by the field_21 column
 * @method     ChildBookQuery groupByField22() Group by the field_22 column
 * @method     ChildBookQuery groupByField23() Group by the field_23 column
 * @method     ChildBookQuery groupByField24() Group by the field_24 column
 * @method     ChildBookQuery groupByField25() Group by the field_25 column
 * @method     ChildBookQuery groupByField26() Group by the field_26 column
 * @method     ChildBookQuery groupByField27() Group by the field_27 column
 * @method     ChildBookQuery groupByField28() Group by the field_28 column
 * @method     ChildBookQuery groupByField29() Group by the field_29 column
 * @method     ChildBookQuery groupByField30() Group by the field_30 column
 * @method     ChildBookQuery groupByField31() Group by the field_31 column
 * @method     ChildBookQuery groupByField32() Group by the field_32 column
 * @method     ChildBookQuery groupByField33() Group by the field_33 column
 * @method     ChildBookQuery groupByField34() Group by the field_34 column
 * @method     ChildBookQuery groupByField35() Group by the field_35 column
 * @method     ChildBookQuery groupByField36() Group by the field_36 column
 * @method     ChildBookQuery groupByField37() Group by the field_37 column
 * @method     ChildBookQuery groupByField38() Group by the field_38 column
 * @method     ChildBookQuery groupByField39() Group by the field_39 column
 * @method     ChildBookQuery groupByField40() Group by the field_40 column
 * @method     ChildBookQuery groupByField41() Group by the field_41 column
 * @method     ChildBookQuery groupByField42() Group by the field_42 column
 * @method     ChildBookQuery groupByField43() Group by the field_43 column
 * @method     ChildBookQuery groupByField44() Group by the field_44 column
 * @method     ChildBookQuery groupByField45() Group by the field_45 column
 * @method     ChildBookQuery groupByField46() Group by the field_46 column
 * @method     ChildBookQuery groupByField47() Group by the field_47 column
 * @method     ChildBookQuery groupByField48() Group by the field_48 column
 * @method     ChildBookQuery groupByField49() Group by the field_49 column
 * @method     ChildBookQuery groupByField50() Group by the field_50 column
 *
 * @method     ChildBookQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBookQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBookQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBookQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBookQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBookQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBook|null findOne(?ConnectionInterface $con = null) Return the first ChildBook matching the query
 * @method     ChildBook findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildBook matching the query, or a new ChildBook object populated from the query conditions when no match is found
 *
 * @method     ChildBook|null findOneById(int $id) Return the first ChildBook filtered by the id column
 * @method     ChildBook|null findOneByField01(string $field_01) Return the first ChildBook filtered by the field_01 column
 * @method     ChildBook|null findOneByField02(string $field_02) Return the first ChildBook filtered by the field_02 column
 * @method     ChildBook|null findOneByField03(string $field_03) Return the first ChildBook filtered by the field_03 column
 * @method     ChildBook|null findOneByField04(string $field_04) Return the first ChildBook filtered by the field_04 column
 * @method     ChildBook|null findOneByField05(string $field_05) Return the first ChildBook filtered by the field_05 column
 * @method     ChildBook|null findOneByField06(string $field_06) Return the first ChildBook filtered by the field_06 column
 * @method     ChildBook|null findOneByField07(string $field_07) Return the first ChildBook filtered by the field_07 column
 * @method     ChildBook|null findOneByField08(string $field_08) Return the first ChildBook filtered by the field_08 column
 * @method     ChildBook|null findOneByField09(string $field_09) Return the first ChildBook filtered by the field_09 column
 * @method     ChildBook|null findOneByField10(string $field_10) Return the first ChildBook filtered by the field_10 column
 * @method     ChildBook|null findOneByField11(string $field_11) Return the first ChildBook filtered by the field_11 column
 * @method     ChildBook|null findOneByField12(string $field_12) Return the first ChildBook filtered by the field_12 column
 * @method     ChildBook|null findOneByField13(string $field_13) Return the first ChildBook filtered by the field_13 column
 * @method     ChildBook|null findOneByField14(string $field_14) Return the first ChildBook filtered by the field_14 column
 * @method     ChildBook|null findOneByField15(string $field_15) Return the first ChildBook filtered by the field_15 column
 * @method     ChildBook|null findOneByField16(string $field_16) Return the first ChildBook filtered by the field_16 column
 * @method     ChildBook|null findOneByField17(string $field_17) Return the first ChildBook filtered by the field_17 column
 * @method     ChildBook|null findOneByField18(string $field_18) Return the first ChildBook filtered by the field_18 column
 * @method     ChildBook|null findOneByField19(string $field_19) Return the first ChildBook filtered by the field_19 column
 * @method     ChildBook|null findOneByField20(string $field_20) Return the first ChildBook filtered by the field_20 column
 * @method     ChildBook|null findOneByField21(string $field_21) Return the first ChildBook filtered by the field_21 column
 * @method     ChildBook|null findOneByField22(string $field_22) Return the first ChildBook filtered by the field_22 column
 * @method     ChildBook|null findOneByField23(string $field_23) Return the first ChildBook filtered by the field_23 column
 * @method     ChildBook|null findOneByField24(string $field_24) Return the first ChildBook filtered by the field_24 column
 * @method     ChildBook|null findOneByField25(string $field_25) Return the first ChildBook filtered by the field_25 column
 * @method     ChildBook|null findOneByField26(string $field_26) Return the first ChildBook filtered by the field_26 column
 * @method     ChildBook|null findOneByField27(string $field_27) Return the first ChildBook filtered by the field_27 column
 * @method     ChildBook|null findOneByField28(string $field_28) Return the first ChildBook filtered by the field_28 column
 * @method     ChildBook|null findOneByField29(string $field_29) Return the first ChildBook filtered by the field_29 column
 * @method     ChildBook|null findOneByField30(string $field_30) Return the first ChildBook filtered by the field_30 column
 * @method     ChildBook|null findOneByField31(string $field_31) Return the first ChildBook filtered by the field_31 column
 * @method     ChildBook|null findOneByField32(string $field_32) Return the first ChildBook filtered by the field_32 column
 * @method     ChildBook|null findOneByField33(string $field_33) Return the first ChildBook filtered by the field_33 column
 * @method     ChildBook|null findOneByField34(string $field_34) Return the first ChildBook filtered by the field_34 column
 * @method     ChildBook|null findOneByField35(string $field_35) Return the first ChildBook filtered by the field_35 column
 * @method     ChildBook|null findOneByField36(string $field_36) Return the first ChildBook filtered by the field_36 column
 * @method     ChildBook|null findOneByField37(string $field_37) Return the first ChildBook filtered by the field_37 column
 * @method     ChildBook|null findOneByField38(string $field_38) Return the first ChildBook filtered by the field_38 column
 * @method     ChildBook|null findOneByField39(string $field_39) Return the first ChildBook filtered by the field_39 column
 * @method     ChildBook|null findOneByField40(string $field_40) Return the first ChildBook filtered by the field_40 column
 * @method     ChildBook|null findOneByField41(string $field_41) Return the first ChildBook filtered by the field_41 column
 * @method     ChildBook|null findOneByField42(string $field_42) Return the first ChildBook filtered by the field_42 column
 * @method     ChildBook|null findOneByField43(string $field_43) Return the first ChildBook filtered by the field_43 column
 * @method     ChildBook|null findOneByField44(string $field_44) Return the first ChildBook filtered by the field_44 column
 * @method     ChildBook|null findOneByField45(string $field_45) Return the first ChildBook filtered by the field_45 column
 * @method     ChildBook|null findOneByField46(string $field_46) Return the first ChildBook filtered by the field_46 column
 * @method     ChildBook|null findOneByField47(string $field_47) Return the first ChildBook filtered by the field_47 column
 * @method     ChildBook|null findOneByField48(string $field_48) Return the first ChildBook filtered by the field_48 column
 * @method     ChildBook|null findOneByField49(string $field_49) Return the first ChildBook filtered by the field_49 column
 * @method     ChildBook|null findOneByField50(string $field_50) Return the first ChildBook filtered by the field_50 column *

 * @method     ChildBook requirePk($key, ?ConnectionInterface $con = null) Return the ChildBook by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOne(?ConnectionInterface $con = null) Return the first ChildBook matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBook requireOneById(int $id) Return the first ChildBook filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField01(string $field_01) Return the first ChildBook filtered by the field_01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField02(string $field_02) Return the first ChildBook filtered by the field_02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField03(string $field_03) Return the first ChildBook filtered by the field_03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField04(string $field_04) Return the first ChildBook filtered by the field_04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField05(string $field_05) Return the first ChildBook filtered by the field_05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField06(string $field_06) Return the first ChildBook filtered by the field_06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField07(string $field_07) Return the first ChildBook filtered by the field_07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField08(string $field_08) Return the first ChildBook filtered by the field_08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField09(string $field_09) Return the first ChildBook filtered by the field_09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField10(string $field_10) Return the first ChildBook filtered by the field_10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField11(string $field_11) Return the first ChildBook filtered by the field_11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField12(string $field_12) Return the first ChildBook filtered by the field_12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField13(string $field_13) Return the first ChildBook filtered by the field_13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField14(string $field_14) Return the first ChildBook filtered by the field_14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField15(string $field_15) Return the first ChildBook filtered by the field_15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField16(string $field_16) Return the first ChildBook filtered by the field_16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField17(string $field_17) Return the first ChildBook filtered by the field_17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField18(string $field_18) Return the first ChildBook filtered by the field_18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField19(string $field_19) Return the first ChildBook filtered by the field_19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField20(string $field_20) Return the first ChildBook filtered by the field_20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField21(string $field_21) Return the first ChildBook filtered by the field_21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField22(string $field_22) Return the first ChildBook filtered by the field_22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField23(string $field_23) Return the first ChildBook filtered by the field_23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField24(string $field_24) Return the first ChildBook filtered by the field_24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField25(string $field_25) Return the first ChildBook filtered by the field_25 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField26(string $field_26) Return the first ChildBook filtered by the field_26 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField27(string $field_27) Return the first ChildBook filtered by the field_27 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField28(string $field_28) Return the first ChildBook filtered by the field_28 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField29(string $field_29) Return the first ChildBook filtered by the field_29 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField30(string $field_30) Return the first ChildBook filtered by the field_30 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField31(string $field_31) Return the first ChildBook filtered by the field_31 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField32(string $field_32) Return the first ChildBook filtered by the field_32 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField33(string $field_33) Return the first ChildBook filtered by the field_33 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField34(string $field_34) Return the first ChildBook filtered by the field_34 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField35(string $field_35) Return the first ChildBook filtered by the field_35 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField36(string $field_36) Return the first ChildBook filtered by the field_36 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField37(string $field_37) Return the first ChildBook filtered by the field_37 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField38(string $field_38) Return the first ChildBook filtered by the field_38 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField39(string $field_39) Return the first ChildBook filtered by the field_39 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField40(string $field_40) Return the first ChildBook filtered by the field_40 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField41(string $field_41) Return the first ChildBook filtered by the field_41 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField42(string $field_42) Return the first ChildBook filtered by the field_42 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField43(string $field_43) Return the first ChildBook filtered by the field_43 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField44(string $field_44) Return the first ChildBook filtered by the field_44 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField45(string $field_45) Return the first ChildBook filtered by the field_45 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField46(string $field_46) Return the first ChildBook filtered by the field_46 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField47(string $field_47) Return the first ChildBook filtered by the field_47 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField48(string $field_48) Return the first ChildBook filtered by the field_48 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField49(string $field_49) Return the first ChildBook filtered by the field_49 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBook requireOneByField50(string $field_50) Return the first ChildBook filtered by the field_50 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBook[]|ObjectCollection find(?ConnectionInterface $con = null) Return ChildBook objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildBook> find(?ConnectionInterface $con = null) Return ChildBook objects based on current ModelCriteria
 * @method     ChildBook[]|ObjectCollection findById(int $id) Return ChildBook objects filtered by the id column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findById(int $id) Return ChildBook objects filtered by the id column
 * @method     ChildBook[]|ObjectCollection findByField01(string $field_01) Return ChildBook objects filtered by the field_01 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField01(string $field_01) Return ChildBook objects filtered by the field_01 column
 * @method     ChildBook[]|ObjectCollection findByField02(string $field_02) Return ChildBook objects filtered by the field_02 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField02(string $field_02) Return ChildBook objects filtered by the field_02 column
 * @method     ChildBook[]|ObjectCollection findByField03(string $field_03) Return ChildBook objects filtered by the field_03 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField03(string $field_03) Return ChildBook objects filtered by the field_03 column
 * @method     ChildBook[]|ObjectCollection findByField04(string $field_04) Return ChildBook objects filtered by the field_04 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField04(string $field_04) Return ChildBook objects filtered by the field_04 column
 * @method     ChildBook[]|ObjectCollection findByField05(string $field_05) Return ChildBook objects filtered by the field_05 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField05(string $field_05) Return ChildBook objects filtered by the field_05 column
 * @method     ChildBook[]|ObjectCollection findByField06(string $field_06) Return ChildBook objects filtered by the field_06 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField06(string $field_06) Return ChildBook objects filtered by the field_06 column
 * @method     ChildBook[]|ObjectCollection findByField07(string $field_07) Return ChildBook objects filtered by the field_07 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField07(string $field_07) Return ChildBook objects filtered by the field_07 column
 * @method     ChildBook[]|ObjectCollection findByField08(string $field_08) Return ChildBook objects filtered by the field_08 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField08(string $field_08) Return ChildBook objects filtered by the field_08 column
 * @method     ChildBook[]|ObjectCollection findByField09(string $field_09) Return ChildBook objects filtered by the field_09 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField09(string $field_09) Return ChildBook objects filtered by the field_09 column
 * @method     ChildBook[]|ObjectCollection findByField10(string $field_10) Return ChildBook objects filtered by the field_10 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField10(string $field_10) Return ChildBook objects filtered by the field_10 column
 * @method     ChildBook[]|ObjectCollection findByField11(string $field_11) Return ChildBook objects filtered by the field_11 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField11(string $field_11) Return ChildBook objects filtered by the field_11 column
 * @method     ChildBook[]|ObjectCollection findByField12(string $field_12) Return ChildBook objects filtered by the field_12 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField12(string $field_12) Return ChildBook objects filtered by the field_12 column
 * @method     ChildBook[]|ObjectCollection findByField13(string $field_13) Return ChildBook objects filtered by the field_13 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField13(string $field_13) Return ChildBook objects filtered by the field_13 column
 * @method     ChildBook[]|ObjectCollection findByField14(string $field_14) Return ChildBook objects filtered by the field_14 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField14(string $field_14) Return ChildBook objects filtered by the field_14 column
 * @method     ChildBook[]|ObjectCollection findByField15(string $field_15) Return ChildBook objects filtered by the field_15 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField15(string $field_15) Return ChildBook objects filtered by the field_15 column
 * @method     ChildBook[]|ObjectCollection findByField16(string $field_16) Return ChildBook objects filtered by the field_16 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField16(string $field_16) Return ChildBook objects filtered by the field_16 column
 * @method     ChildBook[]|ObjectCollection findByField17(string $field_17) Return ChildBook objects filtered by the field_17 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField17(string $field_17) Return ChildBook objects filtered by the field_17 column
 * @method     ChildBook[]|ObjectCollection findByField18(string $field_18) Return ChildBook objects filtered by the field_18 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField18(string $field_18) Return ChildBook objects filtered by the field_18 column
 * @method     ChildBook[]|ObjectCollection findByField19(string $field_19) Return ChildBook objects filtered by the field_19 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField19(string $field_19) Return ChildBook objects filtered by the field_19 column
 * @method     ChildBook[]|ObjectCollection findByField20(string $field_20) Return ChildBook objects filtered by the field_20 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField20(string $field_20) Return ChildBook objects filtered by the field_20 column
 * @method     ChildBook[]|ObjectCollection findByField21(string $field_21) Return ChildBook objects filtered by the field_21 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField21(string $field_21) Return ChildBook objects filtered by the field_21 column
 * @method     ChildBook[]|ObjectCollection findByField22(string $field_22) Return ChildBook objects filtered by the field_22 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField22(string $field_22) Return ChildBook objects filtered by the field_22 column
 * @method     ChildBook[]|ObjectCollection findByField23(string $field_23) Return ChildBook objects filtered by the field_23 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField23(string $field_23) Return ChildBook objects filtered by the field_23 column
 * @method     ChildBook[]|ObjectCollection findByField24(string $field_24) Return ChildBook objects filtered by the field_24 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField24(string $field_24) Return ChildBook objects filtered by the field_24 column
 * @method     ChildBook[]|ObjectCollection findByField25(string $field_25) Return ChildBook objects filtered by the field_25 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField25(string $field_25) Return ChildBook objects filtered by the field_25 column
 * @method     ChildBook[]|ObjectCollection findByField26(string $field_26) Return ChildBook objects filtered by the field_26 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField26(string $field_26) Return ChildBook objects filtered by the field_26 column
 * @method     ChildBook[]|ObjectCollection findByField27(string $field_27) Return ChildBook objects filtered by the field_27 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField27(string $field_27) Return ChildBook objects filtered by the field_27 column
 * @method     ChildBook[]|ObjectCollection findByField28(string $field_28) Return ChildBook objects filtered by the field_28 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField28(string $field_28) Return ChildBook objects filtered by the field_28 column
 * @method     ChildBook[]|ObjectCollection findByField29(string $field_29) Return ChildBook objects filtered by the field_29 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField29(string $field_29) Return ChildBook objects filtered by the field_29 column
 * @method     ChildBook[]|ObjectCollection findByField30(string $field_30) Return ChildBook objects filtered by the field_30 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField30(string $field_30) Return ChildBook objects filtered by the field_30 column
 * @method     ChildBook[]|ObjectCollection findByField31(string $field_31) Return ChildBook objects filtered by the field_31 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField31(string $field_31) Return ChildBook objects filtered by the field_31 column
 * @method     ChildBook[]|ObjectCollection findByField32(string $field_32) Return ChildBook objects filtered by the field_32 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField32(string $field_32) Return ChildBook objects filtered by the field_32 column
 * @method     ChildBook[]|ObjectCollection findByField33(string $field_33) Return ChildBook objects filtered by the field_33 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField33(string $field_33) Return ChildBook objects filtered by the field_33 column
 * @method     ChildBook[]|ObjectCollection findByField34(string $field_34) Return ChildBook objects filtered by the field_34 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField34(string $field_34) Return ChildBook objects filtered by the field_34 column
 * @method     ChildBook[]|ObjectCollection findByField35(string $field_35) Return ChildBook objects filtered by the field_35 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField35(string $field_35) Return ChildBook objects filtered by the field_35 column
 * @method     ChildBook[]|ObjectCollection findByField36(string $field_36) Return ChildBook objects filtered by the field_36 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField36(string $field_36) Return ChildBook objects filtered by the field_36 column
 * @method     ChildBook[]|ObjectCollection findByField37(string $field_37) Return ChildBook objects filtered by the field_37 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField37(string $field_37) Return ChildBook objects filtered by the field_37 column
 * @method     ChildBook[]|ObjectCollection findByField38(string $field_38) Return ChildBook objects filtered by the field_38 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField38(string $field_38) Return ChildBook objects filtered by the field_38 column
 * @method     ChildBook[]|ObjectCollection findByField39(string $field_39) Return ChildBook objects filtered by the field_39 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField39(string $field_39) Return ChildBook objects filtered by the field_39 column
 * @method     ChildBook[]|ObjectCollection findByField40(string $field_40) Return ChildBook objects filtered by the field_40 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField40(string $field_40) Return ChildBook objects filtered by the field_40 column
 * @method     ChildBook[]|ObjectCollection findByField41(string $field_41) Return ChildBook objects filtered by the field_41 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField41(string $field_41) Return ChildBook objects filtered by the field_41 column
 * @method     ChildBook[]|ObjectCollection findByField42(string $field_42) Return ChildBook objects filtered by the field_42 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField42(string $field_42) Return ChildBook objects filtered by the field_42 column
 * @method     ChildBook[]|ObjectCollection findByField43(string $field_43) Return ChildBook objects filtered by the field_43 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField43(string $field_43) Return ChildBook objects filtered by the field_43 column
 * @method     ChildBook[]|ObjectCollection findByField44(string $field_44) Return ChildBook objects filtered by the field_44 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField44(string $field_44) Return ChildBook objects filtered by the field_44 column
 * @method     ChildBook[]|ObjectCollection findByField45(string $field_45) Return ChildBook objects filtered by the field_45 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField45(string $field_45) Return ChildBook objects filtered by the field_45 column
 * @method     ChildBook[]|ObjectCollection findByField46(string $field_46) Return ChildBook objects filtered by the field_46 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField46(string $field_46) Return ChildBook objects filtered by the field_46 column
 * @method     ChildBook[]|ObjectCollection findByField47(string $field_47) Return ChildBook objects filtered by the field_47 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField47(string $field_47) Return ChildBook objects filtered by the field_47 column
 * @method     ChildBook[]|ObjectCollection findByField48(string $field_48) Return ChildBook objects filtered by the field_48 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField48(string $field_48) Return ChildBook objects filtered by the field_48 column
 * @method     ChildBook[]|ObjectCollection findByField49(string $field_49) Return ChildBook objects filtered by the field_49 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField49(string $field_49) Return ChildBook objects filtered by the field_49 column
 * @method     ChildBook[]|ObjectCollection findByField50(string $field_50) Return ChildBook objects filtered by the field_50 column
 * @psalm-method ObjectCollection&\Traversable<ChildBook> findByField50(string $field_50) Return ChildBook objects filtered by the field_50 column
 * @method     ChildBook[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildBook> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BookQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \App\Model\Base\BookQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'bookstore', $modelName = '\\App\\Model\\Book', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBookQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBookQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildBookQuery) {
            return $criteria;
        }
        $query = new ChildBookQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBook|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BookTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBook A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, field_01, field_02, field_03, field_04, field_05, field_06, field_07, field_08, field_09, field_10, field_11, field_12, field_13, field_14, field_15, field_16, field_17, field_18, field_19, field_20, field_21, field_22, field_23, field_24, field_25, field_26, field_27, field_28, field_29, field_30, field_31, field_32, field_33, field_34, field_35, field_36, field_37, field_38, field_39, field_40, field_41, field_42, field_43, field_44, field_45, field_46, field_47, field_48, field_49, field_50 FROM book WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildBook $obj */
            $obj = new ChildBook();
            $obj->hydrate($row);
            BookTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildBook|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(BookTableMap::COL_ID, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(BookTableMap::COL_ID, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterById($id = null, ?string $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BookTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BookTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_ID, $id, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_01 column
     *
     * Example usage:
     * <code>
     * $query->filterByField01('fooValue');   // WHERE field_01 = 'fooValue'
     * $query->filterByField01('%fooValue%', Criteria::LIKE); // WHERE field_01 LIKE '%fooValue%'
     * $query->filterByField01(['foo', 'bar']); // WHERE field_01 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field01 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField01($field01 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field01)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_01, $field01, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_02 column
     *
     * Example usage:
     * <code>
     * $query->filterByField02('fooValue');   // WHERE field_02 = 'fooValue'
     * $query->filterByField02('%fooValue%', Criteria::LIKE); // WHERE field_02 LIKE '%fooValue%'
     * $query->filterByField02(['foo', 'bar']); // WHERE field_02 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field02 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField02($field02 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field02)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_02, $field02, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_03 column
     *
     * Example usage:
     * <code>
     * $query->filterByField03('fooValue');   // WHERE field_03 = 'fooValue'
     * $query->filterByField03('%fooValue%', Criteria::LIKE); // WHERE field_03 LIKE '%fooValue%'
     * $query->filterByField03(['foo', 'bar']); // WHERE field_03 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field03 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField03($field03 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field03)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_03, $field03, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_04 column
     *
     * Example usage:
     * <code>
     * $query->filterByField04('fooValue');   // WHERE field_04 = 'fooValue'
     * $query->filterByField04('%fooValue%', Criteria::LIKE); // WHERE field_04 LIKE '%fooValue%'
     * $query->filterByField04(['foo', 'bar']); // WHERE field_04 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field04 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField04($field04 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field04)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_04, $field04, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_05 column
     *
     * Example usage:
     * <code>
     * $query->filterByField05('fooValue');   // WHERE field_05 = 'fooValue'
     * $query->filterByField05('%fooValue%', Criteria::LIKE); // WHERE field_05 LIKE '%fooValue%'
     * $query->filterByField05(['foo', 'bar']); // WHERE field_05 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field05 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField05($field05 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field05)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_05, $field05, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_06 column
     *
     * Example usage:
     * <code>
     * $query->filterByField06('fooValue');   // WHERE field_06 = 'fooValue'
     * $query->filterByField06('%fooValue%', Criteria::LIKE); // WHERE field_06 LIKE '%fooValue%'
     * $query->filterByField06(['foo', 'bar']); // WHERE field_06 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field06 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField06($field06 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field06)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_06, $field06, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_07 column
     *
     * Example usage:
     * <code>
     * $query->filterByField07('fooValue');   // WHERE field_07 = 'fooValue'
     * $query->filterByField07('%fooValue%', Criteria::LIKE); // WHERE field_07 LIKE '%fooValue%'
     * $query->filterByField07(['foo', 'bar']); // WHERE field_07 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field07 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField07($field07 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field07)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_07, $field07, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_08 column
     *
     * Example usage:
     * <code>
     * $query->filterByField08('fooValue');   // WHERE field_08 = 'fooValue'
     * $query->filterByField08('%fooValue%', Criteria::LIKE); // WHERE field_08 LIKE '%fooValue%'
     * $query->filterByField08(['foo', 'bar']); // WHERE field_08 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field08 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField08($field08 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field08)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_08, $field08, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_09 column
     *
     * Example usage:
     * <code>
     * $query->filterByField09('fooValue');   // WHERE field_09 = 'fooValue'
     * $query->filterByField09('%fooValue%', Criteria::LIKE); // WHERE field_09 LIKE '%fooValue%'
     * $query->filterByField09(['foo', 'bar']); // WHERE field_09 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field09 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField09($field09 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field09)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_09, $field09, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_10 column
     *
     * Example usage:
     * <code>
     * $query->filterByField10('fooValue');   // WHERE field_10 = 'fooValue'
     * $query->filterByField10('%fooValue%', Criteria::LIKE); // WHERE field_10 LIKE '%fooValue%'
     * $query->filterByField10(['foo', 'bar']); // WHERE field_10 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field10 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField10($field10 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field10)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_10, $field10, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_11 column
     *
     * Example usage:
     * <code>
     * $query->filterByField11('fooValue');   // WHERE field_11 = 'fooValue'
     * $query->filterByField11('%fooValue%', Criteria::LIKE); // WHERE field_11 LIKE '%fooValue%'
     * $query->filterByField11(['foo', 'bar']); // WHERE field_11 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field11 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField11($field11 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field11)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_11, $field11, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_12 column
     *
     * Example usage:
     * <code>
     * $query->filterByField12('fooValue');   // WHERE field_12 = 'fooValue'
     * $query->filterByField12('%fooValue%', Criteria::LIKE); // WHERE field_12 LIKE '%fooValue%'
     * $query->filterByField12(['foo', 'bar']); // WHERE field_12 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field12 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField12($field12 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field12)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_12, $field12, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_13 column
     *
     * Example usage:
     * <code>
     * $query->filterByField13('fooValue');   // WHERE field_13 = 'fooValue'
     * $query->filterByField13('%fooValue%', Criteria::LIKE); // WHERE field_13 LIKE '%fooValue%'
     * $query->filterByField13(['foo', 'bar']); // WHERE field_13 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field13 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField13($field13 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field13)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_13, $field13, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_14 column
     *
     * Example usage:
     * <code>
     * $query->filterByField14('fooValue');   // WHERE field_14 = 'fooValue'
     * $query->filterByField14('%fooValue%', Criteria::LIKE); // WHERE field_14 LIKE '%fooValue%'
     * $query->filterByField14(['foo', 'bar']); // WHERE field_14 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field14 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField14($field14 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field14)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_14, $field14, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_15 column
     *
     * Example usage:
     * <code>
     * $query->filterByField15('fooValue');   // WHERE field_15 = 'fooValue'
     * $query->filterByField15('%fooValue%', Criteria::LIKE); // WHERE field_15 LIKE '%fooValue%'
     * $query->filterByField15(['foo', 'bar']); // WHERE field_15 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field15 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField15($field15 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field15)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_15, $field15, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_16 column
     *
     * Example usage:
     * <code>
     * $query->filterByField16('fooValue');   // WHERE field_16 = 'fooValue'
     * $query->filterByField16('%fooValue%', Criteria::LIKE); // WHERE field_16 LIKE '%fooValue%'
     * $query->filterByField16(['foo', 'bar']); // WHERE field_16 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field16 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField16($field16 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field16)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_16, $field16, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_17 column
     *
     * Example usage:
     * <code>
     * $query->filterByField17('fooValue');   // WHERE field_17 = 'fooValue'
     * $query->filterByField17('%fooValue%', Criteria::LIKE); // WHERE field_17 LIKE '%fooValue%'
     * $query->filterByField17(['foo', 'bar']); // WHERE field_17 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field17 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField17($field17 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field17)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_17, $field17, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_18 column
     *
     * Example usage:
     * <code>
     * $query->filterByField18('fooValue');   // WHERE field_18 = 'fooValue'
     * $query->filterByField18('%fooValue%', Criteria::LIKE); // WHERE field_18 LIKE '%fooValue%'
     * $query->filterByField18(['foo', 'bar']); // WHERE field_18 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field18 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField18($field18 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field18)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_18, $field18, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_19 column
     *
     * Example usage:
     * <code>
     * $query->filterByField19('fooValue');   // WHERE field_19 = 'fooValue'
     * $query->filterByField19('%fooValue%', Criteria::LIKE); // WHERE field_19 LIKE '%fooValue%'
     * $query->filterByField19(['foo', 'bar']); // WHERE field_19 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field19 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField19($field19 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field19)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_19, $field19, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_20 column
     *
     * Example usage:
     * <code>
     * $query->filterByField20('fooValue');   // WHERE field_20 = 'fooValue'
     * $query->filterByField20('%fooValue%', Criteria::LIKE); // WHERE field_20 LIKE '%fooValue%'
     * $query->filterByField20(['foo', 'bar']); // WHERE field_20 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field20 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField20($field20 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field20)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_20, $field20, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_21 column
     *
     * Example usage:
     * <code>
     * $query->filterByField21('fooValue');   // WHERE field_21 = 'fooValue'
     * $query->filterByField21('%fooValue%', Criteria::LIKE); // WHERE field_21 LIKE '%fooValue%'
     * $query->filterByField21(['foo', 'bar']); // WHERE field_21 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field21 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField21($field21 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field21)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_21, $field21, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_22 column
     *
     * Example usage:
     * <code>
     * $query->filterByField22('fooValue');   // WHERE field_22 = 'fooValue'
     * $query->filterByField22('%fooValue%', Criteria::LIKE); // WHERE field_22 LIKE '%fooValue%'
     * $query->filterByField22(['foo', 'bar']); // WHERE field_22 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field22 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField22($field22 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field22)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_22, $field22, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_23 column
     *
     * Example usage:
     * <code>
     * $query->filterByField23('fooValue');   // WHERE field_23 = 'fooValue'
     * $query->filterByField23('%fooValue%', Criteria::LIKE); // WHERE field_23 LIKE '%fooValue%'
     * $query->filterByField23(['foo', 'bar']); // WHERE field_23 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field23 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField23($field23 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field23)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_23, $field23, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_24 column
     *
     * Example usage:
     * <code>
     * $query->filterByField24('fooValue');   // WHERE field_24 = 'fooValue'
     * $query->filterByField24('%fooValue%', Criteria::LIKE); // WHERE field_24 LIKE '%fooValue%'
     * $query->filterByField24(['foo', 'bar']); // WHERE field_24 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field24 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField24($field24 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field24)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_24, $field24, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_25 column
     *
     * Example usage:
     * <code>
     * $query->filterByField25('fooValue');   // WHERE field_25 = 'fooValue'
     * $query->filterByField25('%fooValue%', Criteria::LIKE); // WHERE field_25 LIKE '%fooValue%'
     * $query->filterByField25(['foo', 'bar']); // WHERE field_25 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field25 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField25($field25 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field25)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_25, $field25, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_26 column
     *
     * Example usage:
     * <code>
     * $query->filterByField26('fooValue');   // WHERE field_26 = 'fooValue'
     * $query->filterByField26('%fooValue%', Criteria::LIKE); // WHERE field_26 LIKE '%fooValue%'
     * $query->filterByField26(['foo', 'bar']); // WHERE field_26 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field26 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField26($field26 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field26)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_26, $field26, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_27 column
     *
     * Example usage:
     * <code>
     * $query->filterByField27('fooValue');   // WHERE field_27 = 'fooValue'
     * $query->filterByField27('%fooValue%', Criteria::LIKE); // WHERE field_27 LIKE '%fooValue%'
     * $query->filterByField27(['foo', 'bar']); // WHERE field_27 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field27 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField27($field27 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field27)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_27, $field27, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_28 column
     *
     * Example usage:
     * <code>
     * $query->filterByField28('fooValue');   // WHERE field_28 = 'fooValue'
     * $query->filterByField28('%fooValue%', Criteria::LIKE); // WHERE field_28 LIKE '%fooValue%'
     * $query->filterByField28(['foo', 'bar']); // WHERE field_28 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field28 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField28($field28 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field28)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_28, $field28, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_29 column
     *
     * Example usage:
     * <code>
     * $query->filterByField29('fooValue');   // WHERE field_29 = 'fooValue'
     * $query->filterByField29('%fooValue%', Criteria::LIKE); // WHERE field_29 LIKE '%fooValue%'
     * $query->filterByField29(['foo', 'bar']); // WHERE field_29 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field29 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField29($field29 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field29)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_29, $field29, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_30 column
     *
     * Example usage:
     * <code>
     * $query->filterByField30('fooValue');   // WHERE field_30 = 'fooValue'
     * $query->filterByField30('%fooValue%', Criteria::LIKE); // WHERE field_30 LIKE '%fooValue%'
     * $query->filterByField30(['foo', 'bar']); // WHERE field_30 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field30 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField30($field30 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field30)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_30, $field30, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_31 column
     *
     * Example usage:
     * <code>
     * $query->filterByField31('fooValue');   // WHERE field_31 = 'fooValue'
     * $query->filterByField31('%fooValue%', Criteria::LIKE); // WHERE field_31 LIKE '%fooValue%'
     * $query->filterByField31(['foo', 'bar']); // WHERE field_31 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field31 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField31($field31 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field31)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_31, $field31, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_32 column
     *
     * Example usage:
     * <code>
     * $query->filterByField32('fooValue');   // WHERE field_32 = 'fooValue'
     * $query->filterByField32('%fooValue%', Criteria::LIKE); // WHERE field_32 LIKE '%fooValue%'
     * $query->filterByField32(['foo', 'bar']); // WHERE field_32 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field32 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField32($field32 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field32)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_32, $field32, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_33 column
     *
     * Example usage:
     * <code>
     * $query->filterByField33('fooValue');   // WHERE field_33 = 'fooValue'
     * $query->filterByField33('%fooValue%', Criteria::LIKE); // WHERE field_33 LIKE '%fooValue%'
     * $query->filterByField33(['foo', 'bar']); // WHERE field_33 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field33 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField33($field33 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field33)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_33, $field33, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_34 column
     *
     * Example usage:
     * <code>
     * $query->filterByField34('fooValue');   // WHERE field_34 = 'fooValue'
     * $query->filterByField34('%fooValue%', Criteria::LIKE); // WHERE field_34 LIKE '%fooValue%'
     * $query->filterByField34(['foo', 'bar']); // WHERE field_34 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field34 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField34($field34 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field34)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_34, $field34, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_35 column
     *
     * Example usage:
     * <code>
     * $query->filterByField35('fooValue');   // WHERE field_35 = 'fooValue'
     * $query->filterByField35('%fooValue%', Criteria::LIKE); // WHERE field_35 LIKE '%fooValue%'
     * $query->filterByField35(['foo', 'bar']); // WHERE field_35 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field35 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField35($field35 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field35)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_35, $field35, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_36 column
     *
     * Example usage:
     * <code>
     * $query->filterByField36('fooValue');   // WHERE field_36 = 'fooValue'
     * $query->filterByField36('%fooValue%', Criteria::LIKE); // WHERE field_36 LIKE '%fooValue%'
     * $query->filterByField36(['foo', 'bar']); // WHERE field_36 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field36 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField36($field36 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field36)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_36, $field36, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_37 column
     *
     * Example usage:
     * <code>
     * $query->filterByField37('fooValue');   // WHERE field_37 = 'fooValue'
     * $query->filterByField37('%fooValue%', Criteria::LIKE); // WHERE field_37 LIKE '%fooValue%'
     * $query->filterByField37(['foo', 'bar']); // WHERE field_37 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field37 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField37($field37 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field37)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_37, $field37, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_38 column
     *
     * Example usage:
     * <code>
     * $query->filterByField38('fooValue');   // WHERE field_38 = 'fooValue'
     * $query->filterByField38('%fooValue%', Criteria::LIKE); // WHERE field_38 LIKE '%fooValue%'
     * $query->filterByField38(['foo', 'bar']); // WHERE field_38 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field38 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField38($field38 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field38)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_38, $field38, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_39 column
     *
     * Example usage:
     * <code>
     * $query->filterByField39('fooValue');   // WHERE field_39 = 'fooValue'
     * $query->filterByField39('%fooValue%', Criteria::LIKE); // WHERE field_39 LIKE '%fooValue%'
     * $query->filterByField39(['foo', 'bar']); // WHERE field_39 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field39 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField39($field39 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field39)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_39, $field39, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_40 column
     *
     * Example usage:
     * <code>
     * $query->filterByField40('fooValue');   // WHERE field_40 = 'fooValue'
     * $query->filterByField40('%fooValue%', Criteria::LIKE); // WHERE field_40 LIKE '%fooValue%'
     * $query->filterByField40(['foo', 'bar']); // WHERE field_40 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field40 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField40($field40 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field40)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_40, $field40, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_41 column
     *
     * Example usage:
     * <code>
     * $query->filterByField41('fooValue');   // WHERE field_41 = 'fooValue'
     * $query->filterByField41('%fooValue%', Criteria::LIKE); // WHERE field_41 LIKE '%fooValue%'
     * $query->filterByField41(['foo', 'bar']); // WHERE field_41 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field41 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField41($field41 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field41)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_41, $field41, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_42 column
     *
     * Example usage:
     * <code>
     * $query->filterByField42('fooValue');   // WHERE field_42 = 'fooValue'
     * $query->filterByField42('%fooValue%', Criteria::LIKE); // WHERE field_42 LIKE '%fooValue%'
     * $query->filterByField42(['foo', 'bar']); // WHERE field_42 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field42 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField42($field42 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field42)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_42, $field42, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_43 column
     *
     * Example usage:
     * <code>
     * $query->filterByField43('fooValue');   // WHERE field_43 = 'fooValue'
     * $query->filterByField43('%fooValue%', Criteria::LIKE); // WHERE field_43 LIKE '%fooValue%'
     * $query->filterByField43(['foo', 'bar']); // WHERE field_43 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field43 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField43($field43 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field43)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_43, $field43, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_44 column
     *
     * Example usage:
     * <code>
     * $query->filterByField44('fooValue');   // WHERE field_44 = 'fooValue'
     * $query->filterByField44('%fooValue%', Criteria::LIKE); // WHERE field_44 LIKE '%fooValue%'
     * $query->filterByField44(['foo', 'bar']); // WHERE field_44 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field44 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField44($field44 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field44)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_44, $field44, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_45 column
     *
     * Example usage:
     * <code>
     * $query->filterByField45('fooValue');   // WHERE field_45 = 'fooValue'
     * $query->filterByField45('%fooValue%', Criteria::LIKE); // WHERE field_45 LIKE '%fooValue%'
     * $query->filterByField45(['foo', 'bar']); // WHERE field_45 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field45 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField45($field45 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field45)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_45, $field45, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_46 column
     *
     * Example usage:
     * <code>
     * $query->filterByField46('fooValue');   // WHERE field_46 = 'fooValue'
     * $query->filterByField46('%fooValue%', Criteria::LIKE); // WHERE field_46 LIKE '%fooValue%'
     * $query->filterByField46(['foo', 'bar']); // WHERE field_46 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field46 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField46($field46 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field46)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_46, $field46, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_47 column
     *
     * Example usage:
     * <code>
     * $query->filterByField47('fooValue');   // WHERE field_47 = 'fooValue'
     * $query->filterByField47('%fooValue%', Criteria::LIKE); // WHERE field_47 LIKE '%fooValue%'
     * $query->filterByField47(['foo', 'bar']); // WHERE field_47 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field47 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField47($field47 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field47)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_47, $field47, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_48 column
     *
     * Example usage:
     * <code>
     * $query->filterByField48('fooValue');   // WHERE field_48 = 'fooValue'
     * $query->filterByField48('%fooValue%', Criteria::LIKE); // WHERE field_48 LIKE '%fooValue%'
     * $query->filterByField48(['foo', 'bar']); // WHERE field_48 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field48 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField48($field48 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field48)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_48, $field48, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_49 column
     *
     * Example usage:
     * <code>
     * $query->filterByField49('fooValue');   // WHERE field_49 = 'fooValue'
     * $query->filterByField49('%fooValue%', Criteria::LIKE); // WHERE field_49 LIKE '%fooValue%'
     * $query->filterByField49(['foo', 'bar']); // WHERE field_49 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field49 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField49($field49 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field49)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_49, $field49, $comparison);

        return $this;
    }

    /**
     * Filter the query on the field_50 column
     *
     * Example usage:
     * <code>
     * $query->filterByField50('fooValue');   // WHERE field_50 = 'fooValue'
     * $query->filterByField50('%fooValue%', Criteria::LIKE); // WHERE field_50 LIKE '%fooValue%'
     * $query->filterByField50(['foo', 'bar']); // WHERE field_50 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $field50 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByField50($field50 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field50)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookTableMap::COL_FIELD_50, $field50, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildBook $book Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($book = null)
    {
        if ($book) {
            $this->addUsingAlias(BookTableMap::COL_ID, $book->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the book table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BookTableMap::clearInstancePool();
            BookTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BookTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BookTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BookTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
