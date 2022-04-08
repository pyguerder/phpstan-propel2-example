<?php

namespace App\Model\Map;

use App\Model\Book;
use App\Model\BookQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'book' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class BookTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'App.Model.Map.BookTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'bookstore';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'book';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\App\\Model\\Book';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'App.Model.Book';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 51;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 51;

    /**
     * the column name for the id field
     */
    public const COL_ID = 'book.id';

    /**
     * the column name for the field_01 field
     */
    public const COL_FIELD_01 = 'book.field_01';

    /**
     * the column name for the field_02 field
     */
    public const COL_FIELD_02 = 'book.field_02';

    /**
     * the column name for the field_03 field
     */
    public const COL_FIELD_03 = 'book.field_03';

    /**
     * the column name for the field_04 field
     */
    public const COL_FIELD_04 = 'book.field_04';

    /**
     * the column name for the field_05 field
     */
    public const COL_FIELD_05 = 'book.field_05';

    /**
     * the column name for the field_06 field
     */
    public const COL_FIELD_06 = 'book.field_06';

    /**
     * the column name for the field_07 field
     */
    public const COL_FIELD_07 = 'book.field_07';

    /**
     * the column name for the field_08 field
     */
    public const COL_FIELD_08 = 'book.field_08';

    /**
     * the column name for the field_09 field
     */
    public const COL_FIELD_09 = 'book.field_09';

    /**
     * the column name for the field_10 field
     */
    public const COL_FIELD_10 = 'book.field_10';

    /**
     * the column name for the field_11 field
     */
    public const COL_FIELD_11 = 'book.field_11';

    /**
     * the column name for the field_12 field
     */
    public const COL_FIELD_12 = 'book.field_12';

    /**
     * the column name for the field_13 field
     */
    public const COL_FIELD_13 = 'book.field_13';

    /**
     * the column name for the field_14 field
     */
    public const COL_FIELD_14 = 'book.field_14';

    /**
     * the column name for the field_15 field
     */
    public const COL_FIELD_15 = 'book.field_15';

    /**
     * the column name for the field_16 field
     */
    public const COL_FIELD_16 = 'book.field_16';

    /**
     * the column name for the field_17 field
     */
    public const COL_FIELD_17 = 'book.field_17';

    /**
     * the column name for the field_18 field
     */
    public const COL_FIELD_18 = 'book.field_18';

    /**
     * the column name for the field_19 field
     */
    public const COL_FIELD_19 = 'book.field_19';

    /**
     * the column name for the field_20 field
     */
    public const COL_FIELD_20 = 'book.field_20';

    /**
     * the column name for the field_21 field
     */
    public const COL_FIELD_21 = 'book.field_21';

    /**
     * the column name for the field_22 field
     */
    public const COL_FIELD_22 = 'book.field_22';

    /**
     * the column name for the field_23 field
     */
    public const COL_FIELD_23 = 'book.field_23';

    /**
     * the column name for the field_24 field
     */
    public const COL_FIELD_24 = 'book.field_24';

    /**
     * the column name for the field_25 field
     */
    public const COL_FIELD_25 = 'book.field_25';

    /**
     * the column name for the field_26 field
     */
    public const COL_FIELD_26 = 'book.field_26';

    /**
     * the column name for the field_27 field
     */
    public const COL_FIELD_27 = 'book.field_27';

    /**
     * the column name for the field_28 field
     */
    public const COL_FIELD_28 = 'book.field_28';

    /**
     * the column name for the field_29 field
     */
    public const COL_FIELD_29 = 'book.field_29';

    /**
     * the column name for the field_30 field
     */
    public const COL_FIELD_30 = 'book.field_30';

    /**
     * the column name for the field_31 field
     */
    public const COL_FIELD_31 = 'book.field_31';

    /**
     * the column name for the field_32 field
     */
    public const COL_FIELD_32 = 'book.field_32';

    /**
     * the column name for the field_33 field
     */
    public const COL_FIELD_33 = 'book.field_33';

    /**
     * the column name for the field_34 field
     */
    public const COL_FIELD_34 = 'book.field_34';

    /**
     * the column name for the field_35 field
     */
    public const COL_FIELD_35 = 'book.field_35';

    /**
     * the column name for the field_36 field
     */
    public const COL_FIELD_36 = 'book.field_36';

    /**
     * the column name for the field_37 field
     */
    public const COL_FIELD_37 = 'book.field_37';

    /**
     * the column name for the field_38 field
     */
    public const COL_FIELD_38 = 'book.field_38';

    /**
     * the column name for the field_39 field
     */
    public const COL_FIELD_39 = 'book.field_39';

    /**
     * the column name for the field_40 field
     */
    public const COL_FIELD_40 = 'book.field_40';

    /**
     * the column name for the field_41 field
     */
    public const COL_FIELD_41 = 'book.field_41';

    /**
     * the column name for the field_42 field
     */
    public const COL_FIELD_42 = 'book.field_42';

    /**
     * the column name for the field_43 field
     */
    public const COL_FIELD_43 = 'book.field_43';

    /**
     * the column name for the field_44 field
     */
    public const COL_FIELD_44 = 'book.field_44';

    /**
     * the column name for the field_45 field
     */
    public const COL_FIELD_45 = 'book.field_45';

    /**
     * the column name for the field_46 field
     */
    public const COL_FIELD_46 = 'book.field_46';

    /**
     * the column name for the field_47 field
     */
    public const COL_FIELD_47 = 'book.field_47';

    /**
     * the column name for the field_48 field
     */
    public const COL_FIELD_48 = 'book.field_48';

    /**
     * the column name for the field_49 field
     */
    public const COL_FIELD_49 = 'book.field_49';

    /**
     * the column name for the field_50 field
     */
    public const COL_FIELD_50 = 'book.field_50';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Id', 'Field01', 'Field02', 'Field03', 'Field04', 'Field05', 'Field06', 'Field07', 'Field08', 'Field09', 'Field10', 'Field11', 'Field12', 'Field13', 'Field14', 'Field15', 'Field16', 'Field17', 'Field18', 'Field19', 'Field20', 'Field21', 'Field22', 'Field23', 'Field24', 'Field25', 'Field26', 'Field27', 'Field28', 'Field29', 'Field30', 'Field31', 'Field32', 'Field33', 'Field34', 'Field35', 'Field36', 'Field37', 'Field38', 'Field39', 'Field40', 'Field41', 'Field42', 'Field43', 'Field44', 'Field45', 'Field46', 'Field47', 'Field48', 'Field49', 'Field50', ],
        self::TYPE_CAMELNAME     => ['id', 'field01', 'field02', 'field03', 'field04', 'field05', 'field06', 'field07', 'field08', 'field09', 'field10', 'field11', 'field12', 'field13', 'field14', 'field15', 'field16', 'field17', 'field18', 'field19', 'field20', 'field21', 'field22', 'field23', 'field24', 'field25', 'field26', 'field27', 'field28', 'field29', 'field30', 'field31', 'field32', 'field33', 'field34', 'field35', 'field36', 'field37', 'field38', 'field39', 'field40', 'field41', 'field42', 'field43', 'field44', 'field45', 'field46', 'field47', 'field48', 'field49', 'field50', ],
        self::TYPE_COLNAME       => [BookTableMap::COL_ID, BookTableMap::COL_FIELD_01, BookTableMap::COL_FIELD_02, BookTableMap::COL_FIELD_03, BookTableMap::COL_FIELD_04, BookTableMap::COL_FIELD_05, BookTableMap::COL_FIELD_06, BookTableMap::COL_FIELD_07, BookTableMap::COL_FIELD_08, BookTableMap::COL_FIELD_09, BookTableMap::COL_FIELD_10, BookTableMap::COL_FIELD_11, BookTableMap::COL_FIELD_12, BookTableMap::COL_FIELD_13, BookTableMap::COL_FIELD_14, BookTableMap::COL_FIELD_15, BookTableMap::COL_FIELD_16, BookTableMap::COL_FIELD_17, BookTableMap::COL_FIELD_18, BookTableMap::COL_FIELD_19, BookTableMap::COL_FIELD_20, BookTableMap::COL_FIELD_21, BookTableMap::COL_FIELD_22, BookTableMap::COL_FIELD_23, BookTableMap::COL_FIELD_24, BookTableMap::COL_FIELD_25, BookTableMap::COL_FIELD_26, BookTableMap::COL_FIELD_27, BookTableMap::COL_FIELD_28, BookTableMap::COL_FIELD_29, BookTableMap::COL_FIELD_30, BookTableMap::COL_FIELD_31, BookTableMap::COL_FIELD_32, BookTableMap::COL_FIELD_33, BookTableMap::COL_FIELD_34, BookTableMap::COL_FIELD_35, BookTableMap::COL_FIELD_36, BookTableMap::COL_FIELD_37, BookTableMap::COL_FIELD_38, BookTableMap::COL_FIELD_39, BookTableMap::COL_FIELD_40, BookTableMap::COL_FIELD_41, BookTableMap::COL_FIELD_42, BookTableMap::COL_FIELD_43, BookTableMap::COL_FIELD_44, BookTableMap::COL_FIELD_45, BookTableMap::COL_FIELD_46, BookTableMap::COL_FIELD_47, BookTableMap::COL_FIELD_48, BookTableMap::COL_FIELD_49, BookTableMap::COL_FIELD_50, ],
        self::TYPE_FIELDNAME     => ['id', 'field_01', 'field_02', 'field_03', 'field_04', 'field_05', 'field_06', 'field_07', 'field_08', 'field_09', 'field_10', 'field_11', 'field_12', 'field_13', 'field_14', 'field_15', 'field_16', 'field_17', 'field_18', 'field_19', 'field_20', 'field_21', 'field_22', 'field_23', 'field_24', 'field_25', 'field_26', 'field_27', 'field_28', 'field_29', 'field_30', 'field_31', 'field_32', 'field_33', 'field_34', 'field_35', 'field_36', 'field_37', 'field_38', 'field_39', 'field_40', 'field_41', 'field_42', 'field_43', 'field_44', 'field_45', 'field_46', 'field_47', 'field_48', 'field_49', 'field_50', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Id' => 0, 'Field01' => 1, 'Field02' => 2, 'Field03' => 3, 'Field04' => 4, 'Field05' => 5, 'Field06' => 6, 'Field07' => 7, 'Field08' => 8, 'Field09' => 9, 'Field10' => 10, 'Field11' => 11, 'Field12' => 12, 'Field13' => 13, 'Field14' => 14, 'Field15' => 15, 'Field16' => 16, 'Field17' => 17, 'Field18' => 18, 'Field19' => 19, 'Field20' => 20, 'Field21' => 21, 'Field22' => 22, 'Field23' => 23, 'Field24' => 24, 'Field25' => 25, 'Field26' => 26, 'Field27' => 27, 'Field28' => 28, 'Field29' => 29, 'Field30' => 30, 'Field31' => 31, 'Field32' => 32, 'Field33' => 33, 'Field34' => 34, 'Field35' => 35, 'Field36' => 36, 'Field37' => 37, 'Field38' => 38, 'Field39' => 39, 'Field40' => 40, 'Field41' => 41, 'Field42' => 42, 'Field43' => 43, 'Field44' => 44, 'Field45' => 45, 'Field46' => 46, 'Field47' => 47, 'Field48' => 48, 'Field49' => 49, 'Field50' => 50, ],
        self::TYPE_CAMELNAME     => ['id' => 0, 'field01' => 1, 'field02' => 2, 'field03' => 3, 'field04' => 4, 'field05' => 5, 'field06' => 6, 'field07' => 7, 'field08' => 8, 'field09' => 9, 'field10' => 10, 'field11' => 11, 'field12' => 12, 'field13' => 13, 'field14' => 14, 'field15' => 15, 'field16' => 16, 'field17' => 17, 'field18' => 18, 'field19' => 19, 'field20' => 20, 'field21' => 21, 'field22' => 22, 'field23' => 23, 'field24' => 24, 'field25' => 25, 'field26' => 26, 'field27' => 27, 'field28' => 28, 'field29' => 29, 'field30' => 30, 'field31' => 31, 'field32' => 32, 'field33' => 33, 'field34' => 34, 'field35' => 35, 'field36' => 36, 'field37' => 37, 'field38' => 38, 'field39' => 39, 'field40' => 40, 'field41' => 41, 'field42' => 42, 'field43' => 43, 'field44' => 44, 'field45' => 45, 'field46' => 46, 'field47' => 47, 'field48' => 48, 'field49' => 49, 'field50' => 50, ],
        self::TYPE_COLNAME       => [BookTableMap::COL_ID => 0, BookTableMap::COL_FIELD_01 => 1, BookTableMap::COL_FIELD_02 => 2, BookTableMap::COL_FIELD_03 => 3, BookTableMap::COL_FIELD_04 => 4, BookTableMap::COL_FIELD_05 => 5, BookTableMap::COL_FIELD_06 => 6, BookTableMap::COL_FIELD_07 => 7, BookTableMap::COL_FIELD_08 => 8, BookTableMap::COL_FIELD_09 => 9, BookTableMap::COL_FIELD_10 => 10, BookTableMap::COL_FIELD_11 => 11, BookTableMap::COL_FIELD_12 => 12, BookTableMap::COL_FIELD_13 => 13, BookTableMap::COL_FIELD_14 => 14, BookTableMap::COL_FIELD_15 => 15, BookTableMap::COL_FIELD_16 => 16, BookTableMap::COL_FIELD_17 => 17, BookTableMap::COL_FIELD_18 => 18, BookTableMap::COL_FIELD_19 => 19, BookTableMap::COL_FIELD_20 => 20, BookTableMap::COL_FIELD_21 => 21, BookTableMap::COL_FIELD_22 => 22, BookTableMap::COL_FIELD_23 => 23, BookTableMap::COL_FIELD_24 => 24, BookTableMap::COL_FIELD_25 => 25, BookTableMap::COL_FIELD_26 => 26, BookTableMap::COL_FIELD_27 => 27, BookTableMap::COL_FIELD_28 => 28, BookTableMap::COL_FIELD_29 => 29, BookTableMap::COL_FIELD_30 => 30, BookTableMap::COL_FIELD_31 => 31, BookTableMap::COL_FIELD_32 => 32, BookTableMap::COL_FIELD_33 => 33, BookTableMap::COL_FIELD_34 => 34, BookTableMap::COL_FIELD_35 => 35, BookTableMap::COL_FIELD_36 => 36, BookTableMap::COL_FIELD_37 => 37, BookTableMap::COL_FIELD_38 => 38, BookTableMap::COL_FIELD_39 => 39, BookTableMap::COL_FIELD_40 => 40, BookTableMap::COL_FIELD_41 => 41, BookTableMap::COL_FIELD_42 => 42, BookTableMap::COL_FIELD_43 => 43, BookTableMap::COL_FIELD_44 => 44, BookTableMap::COL_FIELD_45 => 45, BookTableMap::COL_FIELD_46 => 46, BookTableMap::COL_FIELD_47 => 47, BookTableMap::COL_FIELD_48 => 48, BookTableMap::COL_FIELD_49 => 49, BookTableMap::COL_FIELD_50 => 50, ],
        self::TYPE_FIELDNAME     => ['id' => 0, 'field_01' => 1, 'field_02' => 2, 'field_03' => 3, 'field_04' => 4, 'field_05' => 5, 'field_06' => 6, 'field_07' => 7, 'field_08' => 8, 'field_09' => 9, 'field_10' => 10, 'field_11' => 11, 'field_12' => 12, 'field_13' => 13, 'field_14' => 14, 'field_15' => 15, 'field_16' => 16, 'field_17' => 17, 'field_18' => 18, 'field_19' => 19, 'field_20' => 20, 'field_21' => 21, 'field_22' => 22, 'field_23' => 23, 'field_24' => 24, 'field_25' => 25, 'field_26' => 26, 'field_27' => 27, 'field_28' => 28, 'field_29' => 29, 'field_30' => 30, 'field_31' => 31, 'field_32' => 32, 'field_33' => 33, 'field_34' => 34, 'field_35' => 35, 'field_36' => 36, 'field_37' => 37, 'field_38' => 38, 'field_39' => 39, 'field_40' => 40, 'field_41' => 41, 'field_42' => 42, 'field_43' => 43, 'field_44' => 44, 'field_45' => 45, 'field_46' => 46, 'field_47' => 47, 'field_48' => 48, 'field_49' => 49, 'field_50' => 50, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Id' => 'ID',
        'Book.Id' => 'ID',
        'id' => 'ID',
        'book.id' => 'ID',
        'BookTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'Field01' => 'FIELD_01',
        'Book.Field01' => 'FIELD_01',
        'field01' => 'FIELD_01',
        'book.field01' => 'FIELD_01',
        'BookTableMap::COL_FIELD_01' => 'FIELD_01',
        'COL_FIELD_01' => 'FIELD_01',
        'field_01' => 'FIELD_01',
        'book.field_01' => 'FIELD_01',
        'Field02' => 'FIELD_02',
        'Book.Field02' => 'FIELD_02',
        'field02' => 'FIELD_02',
        'book.field02' => 'FIELD_02',
        'BookTableMap::COL_FIELD_02' => 'FIELD_02',
        'COL_FIELD_02' => 'FIELD_02',
        'field_02' => 'FIELD_02',
        'book.field_02' => 'FIELD_02',
        'Field03' => 'FIELD_03',
        'Book.Field03' => 'FIELD_03',
        'field03' => 'FIELD_03',
        'book.field03' => 'FIELD_03',
        'BookTableMap::COL_FIELD_03' => 'FIELD_03',
        'COL_FIELD_03' => 'FIELD_03',
        'field_03' => 'FIELD_03',
        'book.field_03' => 'FIELD_03',
        'Field04' => 'FIELD_04',
        'Book.Field04' => 'FIELD_04',
        'field04' => 'FIELD_04',
        'book.field04' => 'FIELD_04',
        'BookTableMap::COL_FIELD_04' => 'FIELD_04',
        'COL_FIELD_04' => 'FIELD_04',
        'field_04' => 'FIELD_04',
        'book.field_04' => 'FIELD_04',
        'Field05' => 'FIELD_05',
        'Book.Field05' => 'FIELD_05',
        'field05' => 'FIELD_05',
        'book.field05' => 'FIELD_05',
        'BookTableMap::COL_FIELD_05' => 'FIELD_05',
        'COL_FIELD_05' => 'FIELD_05',
        'field_05' => 'FIELD_05',
        'book.field_05' => 'FIELD_05',
        'Field06' => 'FIELD_06',
        'Book.Field06' => 'FIELD_06',
        'field06' => 'FIELD_06',
        'book.field06' => 'FIELD_06',
        'BookTableMap::COL_FIELD_06' => 'FIELD_06',
        'COL_FIELD_06' => 'FIELD_06',
        'field_06' => 'FIELD_06',
        'book.field_06' => 'FIELD_06',
        'Field07' => 'FIELD_07',
        'Book.Field07' => 'FIELD_07',
        'field07' => 'FIELD_07',
        'book.field07' => 'FIELD_07',
        'BookTableMap::COL_FIELD_07' => 'FIELD_07',
        'COL_FIELD_07' => 'FIELD_07',
        'field_07' => 'FIELD_07',
        'book.field_07' => 'FIELD_07',
        'Field08' => 'FIELD_08',
        'Book.Field08' => 'FIELD_08',
        'field08' => 'FIELD_08',
        'book.field08' => 'FIELD_08',
        'BookTableMap::COL_FIELD_08' => 'FIELD_08',
        'COL_FIELD_08' => 'FIELD_08',
        'field_08' => 'FIELD_08',
        'book.field_08' => 'FIELD_08',
        'Field09' => 'FIELD_09',
        'Book.Field09' => 'FIELD_09',
        'field09' => 'FIELD_09',
        'book.field09' => 'FIELD_09',
        'BookTableMap::COL_FIELD_09' => 'FIELD_09',
        'COL_FIELD_09' => 'FIELD_09',
        'field_09' => 'FIELD_09',
        'book.field_09' => 'FIELD_09',
        'Field10' => 'FIELD_10',
        'Book.Field10' => 'FIELD_10',
        'field10' => 'FIELD_10',
        'book.field10' => 'FIELD_10',
        'BookTableMap::COL_FIELD_10' => 'FIELD_10',
        'COL_FIELD_10' => 'FIELD_10',
        'field_10' => 'FIELD_10',
        'book.field_10' => 'FIELD_10',
        'Field11' => 'FIELD_11',
        'Book.Field11' => 'FIELD_11',
        'field11' => 'FIELD_11',
        'book.field11' => 'FIELD_11',
        'BookTableMap::COL_FIELD_11' => 'FIELD_11',
        'COL_FIELD_11' => 'FIELD_11',
        'field_11' => 'FIELD_11',
        'book.field_11' => 'FIELD_11',
        'Field12' => 'FIELD_12',
        'Book.Field12' => 'FIELD_12',
        'field12' => 'FIELD_12',
        'book.field12' => 'FIELD_12',
        'BookTableMap::COL_FIELD_12' => 'FIELD_12',
        'COL_FIELD_12' => 'FIELD_12',
        'field_12' => 'FIELD_12',
        'book.field_12' => 'FIELD_12',
        'Field13' => 'FIELD_13',
        'Book.Field13' => 'FIELD_13',
        'field13' => 'FIELD_13',
        'book.field13' => 'FIELD_13',
        'BookTableMap::COL_FIELD_13' => 'FIELD_13',
        'COL_FIELD_13' => 'FIELD_13',
        'field_13' => 'FIELD_13',
        'book.field_13' => 'FIELD_13',
        'Field14' => 'FIELD_14',
        'Book.Field14' => 'FIELD_14',
        'field14' => 'FIELD_14',
        'book.field14' => 'FIELD_14',
        'BookTableMap::COL_FIELD_14' => 'FIELD_14',
        'COL_FIELD_14' => 'FIELD_14',
        'field_14' => 'FIELD_14',
        'book.field_14' => 'FIELD_14',
        'Field15' => 'FIELD_15',
        'Book.Field15' => 'FIELD_15',
        'field15' => 'FIELD_15',
        'book.field15' => 'FIELD_15',
        'BookTableMap::COL_FIELD_15' => 'FIELD_15',
        'COL_FIELD_15' => 'FIELD_15',
        'field_15' => 'FIELD_15',
        'book.field_15' => 'FIELD_15',
        'Field16' => 'FIELD_16',
        'Book.Field16' => 'FIELD_16',
        'field16' => 'FIELD_16',
        'book.field16' => 'FIELD_16',
        'BookTableMap::COL_FIELD_16' => 'FIELD_16',
        'COL_FIELD_16' => 'FIELD_16',
        'field_16' => 'FIELD_16',
        'book.field_16' => 'FIELD_16',
        'Field17' => 'FIELD_17',
        'Book.Field17' => 'FIELD_17',
        'field17' => 'FIELD_17',
        'book.field17' => 'FIELD_17',
        'BookTableMap::COL_FIELD_17' => 'FIELD_17',
        'COL_FIELD_17' => 'FIELD_17',
        'field_17' => 'FIELD_17',
        'book.field_17' => 'FIELD_17',
        'Field18' => 'FIELD_18',
        'Book.Field18' => 'FIELD_18',
        'field18' => 'FIELD_18',
        'book.field18' => 'FIELD_18',
        'BookTableMap::COL_FIELD_18' => 'FIELD_18',
        'COL_FIELD_18' => 'FIELD_18',
        'field_18' => 'FIELD_18',
        'book.field_18' => 'FIELD_18',
        'Field19' => 'FIELD_19',
        'Book.Field19' => 'FIELD_19',
        'field19' => 'FIELD_19',
        'book.field19' => 'FIELD_19',
        'BookTableMap::COL_FIELD_19' => 'FIELD_19',
        'COL_FIELD_19' => 'FIELD_19',
        'field_19' => 'FIELD_19',
        'book.field_19' => 'FIELD_19',
        'Field20' => 'FIELD_20',
        'Book.Field20' => 'FIELD_20',
        'field20' => 'FIELD_20',
        'book.field20' => 'FIELD_20',
        'BookTableMap::COL_FIELD_20' => 'FIELD_20',
        'COL_FIELD_20' => 'FIELD_20',
        'field_20' => 'FIELD_20',
        'book.field_20' => 'FIELD_20',
        'Field21' => 'FIELD_21',
        'Book.Field21' => 'FIELD_21',
        'field21' => 'FIELD_21',
        'book.field21' => 'FIELD_21',
        'BookTableMap::COL_FIELD_21' => 'FIELD_21',
        'COL_FIELD_21' => 'FIELD_21',
        'field_21' => 'FIELD_21',
        'book.field_21' => 'FIELD_21',
        'Field22' => 'FIELD_22',
        'Book.Field22' => 'FIELD_22',
        'field22' => 'FIELD_22',
        'book.field22' => 'FIELD_22',
        'BookTableMap::COL_FIELD_22' => 'FIELD_22',
        'COL_FIELD_22' => 'FIELD_22',
        'field_22' => 'FIELD_22',
        'book.field_22' => 'FIELD_22',
        'Field23' => 'FIELD_23',
        'Book.Field23' => 'FIELD_23',
        'field23' => 'FIELD_23',
        'book.field23' => 'FIELD_23',
        'BookTableMap::COL_FIELD_23' => 'FIELD_23',
        'COL_FIELD_23' => 'FIELD_23',
        'field_23' => 'FIELD_23',
        'book.field_23' => 'FIELD_23',
        'Field24' => 'FIELD_24',
        'Book.Field24' => 'FIELD_24',
        'field24' => 'FIELD_24',
        'book.field24' => 'FIELD_24',
        'BookTableMap::COL_FIELD_24' => 'FIELD_24',
        'COL_FIELD_24' => 'FIELD_24',
        'field_24' => 'FIELD_24',
        'book.field_24' => 'FIELD_24',
        'Field25' => 'FIELD_25',
        'Book.Field25' => 'FIELD_25',
        'field25' => 'FIELD_25',
        'book.field25' => 'FIELD_25',
        'BookTableMap::COL_FIELD_25' => 'FIELD_25',
        'COL_FIELD_25' => 'FIELD_25',
        'field_25' => 'FIELD_25',
        'book.field_25' => 'FIELD_25',
        'Field26' => 'FIELD_26',
        'Book.Field26' => 'FIELD_26',
        'field26' => 'FIELD_26',
        'book.field26' => 'FIELD_26',
        'BookTableMap::COL_FIELD_26' => 'FIELD_26',
        'COL_FIELD_26' => 'FIELD_26',
        'field_26' => 'FIELD_26',
        'book.field_26' => 'FIELD_26',
        'Field27' => 'FIELD_27',
        'Book.Field27' => 'FIELD_27',
        'field27' => 'FIELD_27',
        'book.field27' => 'FIELD_27',
        'BookTableMap::COL_FIELD_27' => 'FIELD_27',
        'COL_FIELD_27' => 'FIELD_27',
        'field_27' => 'FIELD_27',
        'book.field_27' => 'FIELD_27',
        'Field28' => 'FIELD_28',
        'Book.Field28' => 'FIELD_28',
        'field28' => 'FIELD_28',
        'book.field28' => 'FIELD_28',
        'BookTableMap::COL_FIELD_28' => 'FIELD_28',
        'COL_FIELD_28' => 'FIELD_28',
        'field_28' => 'FIELD_28',
        'book.field_28' => 'FIELD_28',
        'Field29' => 'FIELD_29',
        'Book.Field29' => 'FIELD_29',
        'field29' => 'FIELD_29',
        'book.field29' => 'FIELD_29',
        'BookTableMap::COL_FIELD_29' => 'FIELD_29',
        'COL_FIELD_29' => 'FIELD_29',
        'field_29' => 'FIELD_29',
        'book.field_29' => 'FIELD_29',
        'Field30' => 'FIELD_30',
        'Book.Field30' => 'FIELD_30',
        'field30' => 'FIELD_30',
        'book.field30' => 'FIELD_30',
        'BookTableMap::COL_FIELD_30' => 'FIELD_30',
        'COL_FIELD_30' => 'FIELD_30',
        'field_30' => 'FIELD_30',
        'book.field_30' => 'FIELD_30',
        'Field31' => 'FIELD_31',
        'Book.Field31' => 'FIELD_31',
        'field31' => 'FIELD_31',
        'book.field31' => 'FIELD_31',
        'BookTableMap::COL_FIELD_31' => 'FIELD_31',
        'COL_FIELD_31' => 'FIELD_31',
        'field_31' => 'FIELD_31',
        'book.field_31' => 'FIELD_31',
        'Field32' => 'FIELD_32',
        'Book.Field32' => 'FIELD_32',
        'field32' => 'FIELD_32',
        'book.field32' => 'FIELD_32',
        'BookTableMap::COL_FIELD_32' => 'FIELD_32',
        'COL_FIELD_32' => 'FIELD_32',
        'field_32' => 'FIELD_32',
        'book.field_32' => 'FIELD_32',
        'Field33' => 'FIELD_33',
        'Book.Field33' => 'FIELD_33',
        'field33' => 'FIELD_33',
        'book.field33' => 'FIELD_33',
        'BookTableMap::COL_FIELD_33' => 'FIELD_33',
        'COL_FIELD_33' => 'FIELD_33',
        'field_33' => 'FIELD_33',
        'book.field_33' => 'FIELD_33',
        'Field34' => 'FIELD_34',
        'Book.Field34' => 'FIELD_34',
        'field34' => 'FIELD_34',
        'book.field34' => 'FIELD_34',
        'BookTableMap::COL_FIELD_34' => 'FIELD_34',
        'COL_FIELD_34' => 'FIELD_34',
        'field_34' => 'FIELD_34',
        'book.field_34' => 'FIELD_34',
        'Field35' => 'FIELD_35',
        'Book.Field35' => 'FIELD_35',
        'field35' => 'FIELD_35',
        'book.field35' => 'FIELD_35',
        'BookTableMap::COL_FIELD_35' => 'FIELD_35',
        'COL_FIELD_35' => 'FIELD_35',
        'field_35' => 'FIELD_35',
        'book.field_35' => 'FIELD_35',
        'Field36' => 'FIELD_36',
        'Book.Field36' => 'FIELD_36',
        'field36' => 'FIELD_36',
        'book.field36' => 'FIELD_36',
        'BookTableMap::COL_FIELD_36' => 'FIELD_36',
        'COL_FIELD_36' => 'FIELD_36',
        'field_36' => 'FIELD_36',
        'book.field_36' => 'FIELD_36',
        'Field37' => 'FIELD_37',
        'Book.Field37' => 'FIELD_37',
        'field37' => 'FIELD_37',
        'book.field37' => 'FIELD_37',
        'BookTableMap::COL_FIELD_37' => 'FIELD_37',
        'COL_FIELD_37' => 'FIELD_37',
        'field_37' => 'FIELD_37',
        'book.field_37' => 'FIELD_37',
        'Field38' => 'FIELD_38',
        'Book.Field38' => 'FIELD_38',
        'field38' => 'FIELD_38',
        'book.field38' => 'FIELD_38',
        'BookTableMap::COL_FIELD_38' => 'FIELD_38',
        'COL_FIELD_38' => 'FIELD_38',
        'field_38' => 'FIELD_38',
        'book.field_38' => 'FIELD_38',
        'Field39' => 'FIELD_39',
        'Book.Field39' => 'FIELD_39',
        'field39' => 'FIELD_39',
        'book.field39' => 'FIELD_39',
        'BookTableMap::COL_FIELD_39' => 'FIELD_39',
        'COL_FIELD_39' => 'FIELD_39',
        'field_39' => 'FIELD_39',
        'book.field_39' => 'FIELD_39',
        'Field40' => 'FIELD_40',
        'Book.Field40' => 'FIELD_40',
        'field40' => 'FIELD_40',
        'book.field40' => 'FIELD_40',
        'BookTableMap::COL_FIELD_40' => 'FIELD_40',
        'COL_FIELD_40' => 'FIELD_40',
        'field_40' => 'FIELD_40',
        'book.field_40' => 'FIELD_40',
        'Field41' => 'FIELD_41',
        'Book.Field41' => 'FIELD_41',
        'field41' => 'FIELD_41',
        'book.field41' => 'FIELD_41',
        'BookTableMap::COL_FIELD_41' => 'FIELD_41',
        'COL_FIELD_41' => 'FIELD_41',
        'field_41' => 'FIELD_41',
        'book.field_41' => 'FIELD_41',
        'Field42' => 'FIELD_42',
        'Book.Field42' => 'FIELD_42',
        'field42' => 'FIELD_42',
        'book.field42' => 'FIELD_42',
        'BookTableMap::COL_FIELD_42' => 'FIELD_42',
        'COL_FIELD_42' => 'FIELD_42',
        'field_42' => 'FIELD_42',
        'book.field_42' => 'FIELD_42',
        'Field43' => 'FIELD_43',
        'Book.Field43' => 'FIELD_43',
        'field43' => 'FIELD_43',
        'book.field43' => 'FIELD_43',
        'BookTableMap::COL_FIELD_43' => 'FIELD_43',
        'COL_FIELD_43' => 'FIELD_43',
        'field_43' => 'FIELD_43',
        'book.field_43' => 'FIELD_43',
        'Field44' => 'FIELD_44',
        'Book.Field44' => 'FIELD_44',
        'field44' => 'FIELD_44',
        'book.field44' => 'FIELD_44',
        'BookTableMap::COL_FIELD_44' => 'FIELD_44',
        'COL_FIELD_44' => 'FIELD_44',
        'field_44' => 'FIELD_44',
        'book.field_44' => 'FIELD_44',
        'Field45' => 'FIELD_45',
        'Book.Field45' => 'FIELD_45',
        'field45' => 'FIELD_45',
        'book.field45' => 'FIELD_45',
        'BookTableMap::COL_FIELD_45' => 'FIELD_45',
        'COL_FIELD_45' => 'FIELD_45',
        'field_45' => 'FIELD_45',
        'book.field_45' => 'FIELD_45',
        'Field46' => 'FIELD_46',
        'Book.Field46' => 'FIELD_46',
        'field46' => 'FIELD_46',
        'book.field46' => 'FIELD_46',
        'BookTableMap::COL_FIELD_46' => 'FIELD_46',
        'COL_FIELD_46' => 'FIELD_46',
        'field_46' => 'FIELD_46',
        'book.field_46' => 'FIELD_46',
        'Field47' => 'FIELD_47',
        'Book.Field47' => 'FIELD_47',
        'field47' => 'FIELD_47',
        'book.field47' => 'FIELD_47',
        'BookTableMap::COL_FIELD_47' => 'FIELD_47',
        'COL_FIELD_47' => 'FIELD_47',
        'field_47' => 'FIELD_47',
        'book.field_47' => 'FIELD_47',
        'Field48' => 'FIELD_48',
        'Book.Field48' => 'FIELD_48',
        'field48' => 'FIELD_48',
        'book.field48' => 'FIELD_48',
        'BookTableMap::COL_FIELD_48' => 'FIELD_48',
        'COL_FIELD_48' => 'FIELD_48',
        'field_48' => 'FIELD_48',
        'book.field_48' => 'FIELD_48',
        'Field49' => 'FIELD_49',
        'Book.Field49' => 'FIELD_49',
        'field49' => 'FIELD_49',
        'book.field49' => 'FIELD_49',
        'BookTableMap::COL_FIELD_49' => 'FIELD_49',
        'COL_FIELD_49' => 'FIELD_49',
        'field_49' => 'FIELD_49',
        'book.field_49' => 'FIELD_49',
        'Field50' => 'FIELD_50',
        'Book.Field50' => 'FIELD_50',
        'field50' => 'FIELD_50',
        'book.field50' => 'FIELD_50',
        'BookTableMap::COL_FIELD_50' => 'FIELD_50',
        'COL_FIELD_50' => 'FIELD_50',
        'field_50' => 'FIELD_50',
        'book.field_50' => 'FIELD_50',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('book');
        $this->setPhpName('Book');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\App\\Model\\Book');
        $this->setPackage('App.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('field_01', 'Field01', 'VARCHAR', true, 255, null);
        $this->addColumn('field_02', 'Field02', 'VARCHAR', true, 255, null);
        $this->addColumn('field_03', 'Field03', 'VARCHAR', true, 255, null);
        $this->addColumn('field_04', 'Field04', 'VARCHAR', true, 255, null);
        $this->addColumn('field_05', 'Field05', 'VARCHAR', true, 255, null);
        $this->addColumn('field_06', 'Field06', 'VARCHAR', true, 255, null);
        $this->addColumn('field_07', 'Field07', 'VARCHAR', true, 255, null);
        $this->addColumn('field_08', 'Field08', 'VARCHAR', true, 255, null);
        $this->addColumn('field_09', 'Field09', 'VARCHAR', true, 255, null);
        $this->addColumn('field_10', 'Field10', 'VARCHAR', true, 255, null);
        $this->addColumn('field_11', 'Field11', 'VARCHAR', true, 255, null);
        $this->addColumn('field_12', 'Field12', 'VARCHAR', true, 255, null);
        $this->addColumn('field_13', 'Field13', 'VARCHAR', true, 255, null);
        $this->addColumn('field_14', 'Field14', 'VARCHAR', true, 255, null);
        $this->addColumn('field_15', 'Field15', 'VARCHAR', true, 255, null);
        $this->addColumn('field_16', 'Field16', 'VARCHAR', true, 255, null);
        $this->addColumn('field_17', 'Field17', 'VARCHAR', true, 255, null);
        $this->addColumn('field_18', 'Field18', 'VARCHAR', true, 255, null);
        $this->addColumn('field_19', 'Field19', 'VARCHAR', true, 255, null);
        $this->addColumn('field_20', 'Field20', 'VARCHAR', true, 255, null);
        $this->addColumn('field_21', 'Field21', 'VARCHAR', true, 255, null);
        $this->addColumn('field_22', 'Field22', 'VARCHAR', true, 255, null);
        $this->addColumn('field_23', 'Field23', 'VARCHAR', true, 255, null);
        $this->addColumn('field_24', 'Field24', 'VARCHAR', true, 255, null);
        $this->addColumn('field_25', 'Field25', 'VARCHAR', true, 255, null);
        $this->addColumn('field_26', 'Field26', 'VARCHAR', true, 255, null);
        $this->addColumn('field_27', 'Field27', 'VARCHAR', true, 255, null);
        $this->addColumn('field_28', 'Field28', 'VARCHAR', true, 255, null);
        $this->addColumn('field_29', 'Field29', 'VARCHAR', true, 255, null);
        $this->addColumn('field_30', 'Field30', 'VARCHAR', true, 255, null);
        $this->addColumn('field_31', 'Field31', 'VARCHAR', true, 255, null);
        $this->addColumn('field_32', 'Field32', 'VARCHAR', true, 255, null);
        $this->addColumn('field_33', 'Field33', 'VARCHAR', true, 255, null);
        $this->addColumn('field_34', 'Field34', 'VARCHAR', true, 255, null);
        $this->addColumn('field_35', 'Field35', 'VARCHAR', true, 255, null);
        $this->addColumn('field_36', 'Field36', 'VARCHAR', true, 255, null);
        $this->addColumn('field_37', 'Field37', 'VARCHAR', true, 255, null);
        $this->addColumn('field_38', 'Field38', 'VARCHAR', true, 255, null);
        $this->addColumn('field_39', 'Field39', 'VARCHAR', true, 255, null);
        $this->addColumn('field_40', 'Field40', 'VARCHAR', true, 255, null);
        $this->addColumn('field_41', 'Field41', 'VARCHAR', true, 255, null);
        $this->addColumn('field_42', 'Field42', 'VARCHAR', true, 255, null);
        $this->addColumn('field_43', 'Field43', 'VARCHAR', true, 255, null);
        $this->addColumn('field_44', 'Field44', 'VARCHAR', true, 255, null);
        $this->addColumn('field_45', 'Field45', 'VARCHAR', true, 255, null);
        $this->addColumn('field_46', 'Field46', 'VARCHAR', true, 255, null);
        $this->addColumn('field_47', 'Field47', 'VARCHAR', true, 255, null);
        $this->addColumn('field_48', 'Field48', 'VARCHAR', true, 255, null);
        $this->addColumn('field_49', 'Field49', 'VARCHAR', true, 255, null);
        $this->addColumn('field_50', 'Field50', 'VARCHAR', true, 255, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? BookTableMap::CLASS_DEFAULT : BookTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (Book object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = BookTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BookTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BookTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BookTableMap::OM_CLASS;
            /** @var Book $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BookTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = BookTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BookTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Book $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BookTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(BookTableMap::COL_ID);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_01);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_02);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_03);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_04);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_05);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_06);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_07);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_08);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_09);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_10);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_11);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_12);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_13);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_14);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_15);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_16);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_17);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_18);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_19);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_20);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_21);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_22);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_23);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_24);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_25);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_26);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_27);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_28);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_29);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_30);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_31);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_32);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_33);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_34);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_35);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_36);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_37);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_38);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_39);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_40);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_41);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_42);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_43);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_44);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_45);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_46);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_47);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_48);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_49);
            $criteria->addSelectColumn(BookTableMap::COL_FIELD_50);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.field_01');
            $criteria->addSelectColumn($alias . '.field_02');
            $criteria->addSelectColumn($alias . '.field_03');
            $criteria->addSelectColumn($alias . '.field_04');
            $criteria->addSelectColumn($alias . '.field_05');
            $criteria->addSelectColumn($alias . '.field_06');
            $criteria->addSelectColumn($alias . '.field_07');
            $criteria->addSelectColumn($alias . '.field_08');
            $criteria->addSelectColumn($alias . '.field_09');
            $criteria->addSelectColumn($alias . '.field_10');
            $criteria->addSelectColumn($alias . '.field_11');
            $criteria->addSelectColumn($alias . '.field_12');
            $criteria->addSelectColumn($alias . '.field_13');
            $criteria->addSelectColumn($alias . '.field_14');
            $criteria->addSelectColumn($alias . '.field_15');
            $criteria->addSelectColumn($alias . '.field_16');
            $criteria->addSelectColumn($alias . '.field_17');
            $criteria->addSelectColumn($alias . '.field_18');
            $criteria->addSelectColumn($alias . '.field_19');
            $criteria->addSelectColumn($alias . '.field_20');
            $criteria->addSelectColumn($alias . '.field_21');
            $criteria->addSelectColumn($alias . '.field_22');
            $criteria->addSelectColumn($alias . '.field_23');
            $criteria->addSelectColumn($alias . '.field_24');
            $criteria->addSelectColumn($alias . '.field_25');
            $criteria->addSelectColumn($alias . '.field_26');
            $criteria->addSelectColumn($alias . '.field_27');
            $criteria->addSelectColumn($alias . '.field_28');
            $criteria->addSelectColumn($alias . '.field_29');
            $criteria->addSelectColumn($alias . '.field_30');
            $criteria->addSelectColumn($alias . '.field_31');
            $criteria->addSelectColumn($alias . '.field_32');
            $criteria->addSelectColumn($alias . '.field_33');
            $criteria->addSelectColumn($alias . '.field_34');
            $criteria->addSelectColumn($alias . '.field_35');
            $criteria->addSelectColumn($alias . '.field_36');
            $criteria->addSelectColumn($alias . '.field_37');
            $criteria->addSelectColumn($alias . '.field_38');
            $criteria->addSelectColumn($alias . '.field_39');
            $criteria->addSelectColumn($alias . '.field_40');
            $criteria->addSelectColumn($alias . '.field_41');
            $criteria->addSelectColumn($alias . '.field_42');
            $criteria->addSelectColumn($alias . '.field_43');
            $criteria->addSelectColumn($alias . '.field_44');
            $criteria->addSelectColumn($alias . '.field_45');
            $criteria->addSelectColumn($alias . '.field_46');
            $criteria->addSelectColumn($alias . '.field_47');
            $criteria->addSelectColumn($alias . '.field_48');
            $criteria->addSelectColumn($alias . '.field_49');
            $criteria->addSelectColumn($alias . '.field_50');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(BookTableMap::COL_ID);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_01);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_02);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_03);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_04);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_05);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_06);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_07);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_08);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_09);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_10);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_11);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_12);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_13);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_14);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_15);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_16);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_17);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_18);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_19);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_20);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_21);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_22);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_23);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_24);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_25);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_26);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_27);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_28);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_29);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_30);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_31);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_32);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_33);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_34);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_35);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_36);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_37);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_38);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_39);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_40);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_41);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_42);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_43);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_44);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_45);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_46);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_47);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_48);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_49);
            $criteria->removeSelectColumn(BookTableMap::COL_FIELD_50);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.field_01');
            $criteria->removeSelectColumn($alias . '.field_02');
            $criteria->removeSelectColumn($alias . '.field_03');
            $criteria->removeSelectColumn($alias . '.field_04');
            $criteria->removeSelectColumn($alias . '.field_05');
            $criteria->removeSelectColumn($alias . '.field_06');
            $criteria->removeSelectColumn($alias . '.field_07');
            $criteria->removeSelectColumn($alias . '.field_08');
            $criteria->removeSelectColumn($alias . '.field_09');
            $criteria->removeSelectColumn($alias . '.field_10');
            $criteria->removeSelectColumn($alias . '.field_11');
            $criteria->removeSelectColumn($alias . '.field_12');
            $criteria->removeSelectColumn($alias . '.field_13');
            $criteria->removeSelectColumn($alias . '.field_14');
            $criteria->removeSelectColumn($alias . '.field_15');
            $criteria->removeSelectColumn($alias . '.field_16');
            $criteria->removeSelectColumn($alias . '.field_17');
            $criteria->removeSelectColumn($alias . '.field_18');
            $criteria->removeSelectColumn($alias . '.field_19');
            $criteria->removeSelectColumn($alias . '.field_20');
            $criteria->removeSelectColumn($alias . '.field_21');
            $criteria->removeSelectColumn($alias . '.field_22');
            $criteria->removeSelectColumn($alias . '.field_23');
            $criteria->removeSelectColumn($alias . '.field_24');
            $criteria->removeSelectColumn($alias . '.field_25');
            $criteria->removeSelectColumn($alias . '.field_26');
            $criteria->removeSelectColumn($alias . '.field_27');
            $criteria->removeSelectColumn($alias . '.field_28');
            $criteria->removeSelectColumn($alias . '.field_29');
            $criteria->removeSelectColumn($alias . '.field_30');
            $criteria->removeSelectColumn($alias . '.field_31');
            $criteria->removeSelectColumn($alias . '.field_32');
            $criteria->removeSelectColumn($alias . '.field_33');
            $criteria->removeSelectColumn($alias . '.field_34');
            $criteria->removeSelectColumn($alias . '.field_35');
            $criteria->removeSelectColumn($alias . '.field_36');
            $criteria->removeSelectColumn($alias . '.field_37');
            $criteria->removeSelectColumn($alias . '.field_38');
            $criteria->removeSelectColumn($alias . '.field_39');
            $criteria->removeSelectColumn($alias . '.field_40');
            $criteria->removeSelectColumn($alias . '.field_41');
            $criteria->removeSelectColumn($alias . '.field_42');
            $criteria->removeSelectColumn($alias . '.field_43');
            $criteria->removeSelectColumn($alias . '.field_44');
            $criteria->removeSelectColumn($alias . '.field_45');
            $criteria->removeSelectColumn($alias . '.field_46');
            $criteria->removeSelectColumn($alias . '.field_47');
            $criteria->removeSelectColumn($alias . '.field_48');
            $criteria->removeSelectColumn($alias . '.field_49');
            $criteria->removeSelectColumn($alias . '.field_50');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(BookTableMap::DATABASE_NAME)->getTable(BookTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a Book or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or Book object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \App\Model\Book) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BookTableMap::DATABASE_NAME);
            $criteria->add(BookTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = BookQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BookTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BookTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the book table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return BookQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Book or Criteria object.
     *
     * @param mixed $criteria Criteria or Book object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Book object
        }

        if ($criteria->containsKey(BookTableMap::COL_ID) && $criteria->keyContainsValue(BookTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.BookTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = BookQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
