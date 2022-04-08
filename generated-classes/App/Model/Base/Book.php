<?php

namespace App\Model\Base;

use \Exception;
use \PDO;
use App\Model\BookQuery as ChildBookQuery;
use App\Model\Map\BookTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'book' table.
 *
 *
 *
 * @package    propel.generator.App.Model.Base
 */
abstract class Book implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\App\\Model\\Map\\BookTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var bool
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var bool
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = [];

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = [];

    /**
     * The value for the id field.
     *
     * @var        int
     */
    protected $id;

    /**
     * The value for the field_01 field.
     *
     * @var        string
     */
    protected $field_01;

    /**
     * The value for the field_02 field.
     *
     * @var        string
     */
    protected $field_02;

    /**
     * The value for the field_03 field.
     *
     * @var        string
     */
    protected $field_03;

    /**
     * The value for the field_04 field.
     *
     * @var        string
     */
    protected $field_04;

    /**
     * The value for the field_05 field.
     *
     * @var        string
     */
    protected $field_05;

    /**
     * The value for the field_06 field.
     *
     * @var        string
     */
    protected $field_06;

    /**
     * The value for the field_07 field.
     *
     * @var        string
     */
    protected $field_07;

    /**
     * The value for the field_08 field.
     *
     * @var        string
     */
    protected $field_08;

    /**
     * The value for the field_09 field.
     *
     * @var        string
     */
    protected $field_09;

    /**
     * The value for the field_10 field.
     *
     * @var        string
     */
    protected $field_10;

    /**
     * The value for the field_11 field.
     *
     * @var        string
     */
    protected $field_11;

    /**
     * The value for the field_12 field.
     *
     * @var        string
     */
    protected $field_12;

    /**
     * The value for the field_13 field.
     *
     * @var        string
     */
    protected $field_13;

    /**
     * The value for the field_14 field.
     *
     * @var        string
     */
    protected $field_14;

    /**
     * The value for the field_15 field.
     *
     * @var        string
     */
    protected $field_15;

    /**
     * The value for the field_16 field.
     *
     * @var        string
     */
    protected $field_16;

    /**
     * The value for the field_17 field.
     *
     * @var        string
     */
    protected $field_17;

    /**
     * The value for the field_18 field.
     *
     * @var        string
     */
    protected $field_18;

    /**
     * The value for the field_19 field.
     *
     * @var        string
     */
    protected $field_19;

    /**
     * The value for the field_20 field.
     *
     * @var        string
     */
    protected $field_20;

    /**
     * The value for the field_21 field.
     *
     * @var        string
     */
    protected $field_21;

    /**
     * The value for the field_22 field.
     *
     * @var        string
     */
    protected $field_22;

    /**
     * The value for the field_23 field.
     *
     * @var        string
     */
    protected $field_23;

    /**
     * The value for the field_24 field.
     *
     * @var        string
     */
    protected $field_24;

    /**
     * The value for the field_25 field.
     *
     * @var        string
     */
    protected $field_25;

    /**
     * The value for the field_26 field.
     *
     * @var        string
     */
    protected $field_26;

    /**
     * The value for the field_27 field.
     *
     * @var        string
     */
    protected $field_27;

    /**
     * The value for the field_28 field.
     *
     * @var        string
     */
    protected $field_28;

    /**
     * The value for the field_29 field.
     *
     * @var        string
     */
    protected $field_29;

    /**
     * The value for the field_30 field.
     *
     * @var        string
     */
    protected $field_30;

    /**
     * The value for the field_31 field.
     *
     * @var        string
     */
    protected $field_31;

    /**
     * The value for the field_32 field.
     *
     * @var        string
     */
    protected $field_32;

    /**
     * The value for the field_33 field.
     *
     * @var        string
     */
    protected $field_33;

    /**
     * The value for the field_34 field.
     *
     * @var        string
     */
    protected $field_34;

    /**
     * The value for the field_35 field.
     *
     * @var        string
     */
    protected $field_35;

    /**
     * The value for the field_36 field.
     *
     * @var        string
     */
    protected $field_36;

    /**
     * The value for the field_37 field.
     *
     * @var        string
     */
    protected $field_37;

    /**
     * The value for the field_38 field.
     *
     * @var        string
     */
    protected $field_38;

    /**
     * The value for the field_39 field.
     *
     * @var        string
     */
    protected $field_39;

    /**
     * The value for the field_40 field.
     *
     * @var        string
     */
    protected $field_40;

    /**
     * The value for the field_41 field.
     *
     * @var        string
     */
    protected $field_41;

    /**
     * The value for the field_42 field.
     *
     * @var        string
     */
    protected $field_42;

    /**
     * The value for the field_43 field.
     *
     * @var        string
     */
    protected $field_43;

    /**
     * The value for the field_44 field.
     *
     * @var        string
     */
    protected $field_44;

    /**
     * The value for the field_45 field.
     *
     * @var        string
     */
    protected $field_45;

    /**
     * The value for the field_46 field.
     *
     * @var        string
     */
    protected $field_46;

    /**
     * The value for the field_47 field.
     *
     * @var        string
     */
    protected $field_47;

    /**
     * The value for the field_48 field.
     *
     * @var        string
     */
    protected $field_48;

    /**
     * The value for the field_49 field.
     *
     * @var        string
     */
    protected $field_49;

    /**
     * The value for the field_50 field.
     *
     * @var        string
     */
    protected $field_50;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of App\Model\Base\Book object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return bool True if the object has been modified.
     */
    public function isModified(): bool
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param string $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return bool True if $col has been modified.
     */
    public function isColumnModified(string $col): bool
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns(): array
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return bool True, if the object has never been persisted.
     */
    public function isNew(): bool
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param bool $b the state of the object.
     */
    public function setNew(bool $b)
    {
        $this->new = $b;
    }

    /**
     * Whether this object has been deleted.
     * @return bool The deleted state of this object.
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param bool $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b): void
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified(?string $col = null): void
    {
        if (null !== $col) {
            unset($this->modifiedColumns[$col]);
        } else {
            $this->modifiedColumns = [];
        }
    }

    /**
     * Compares this with another <code>Book</code> instance.  If
     * <code>obj</code> is an instance of <code>Book</code>, delegates to
     * <code>equals(Book)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param mixed $obj The object to compare to.
     * @return bool Whether equal to the object specified.
     */
    public function equals($obj): bool
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns(): array
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return bool
     */
    public function hasVirtualColumn(string $name): bool
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return mixed
     *
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getVirtualColumn(string $name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of nonexistent virtual column `%s`.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @param mixed $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn(string $name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param string $msg
     * @param int $priority One of the Propel::LOG_* logging levels
     * @return void
     */
    protected function log(string $msg, int $priority = Propel::LOG_INFO): void
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param \Propel\Runtime\Parser\AbstractParser|string $parser An AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string The exported data
     */
    public function exportTo($parser, bool $includeLazyLoadColumns = true, string $keyType = TableMap::TYPE_PHPNAME): string
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [field_01] column value.
     *
     * @return string
     */
    public function getField01()
    {
        return $this->field_01;
    }

    /**
     * Get the [field_02] column value.
     *
     * @return string
     */
    public function getField02()
    {
        return $this->field_02;
    }

    /**
     * Get the [field_03] column value.
     *
     * @return string
     */
    public function getField03()
    {
        return $this->field_03;
    }

    /**
     * Get the [field_04] column value.
     *
     * @return string
     */
    public function getField04()
    {
        return $this->field_04;
    }

    /**
     * Get the [field_05] column value.
     *
     * @return string
     */
    public function getField05()
    {
        return $this->field_05;
    }

    /**
     * Get the [field_06] column value.
     *
     * @return string
     */
    public function getField06()
    {
        return $this->field_06;
    }

    /**
     * Get the [field_07] column value.
     *
     * @return string
     */
    public function getField07()
    {
        return $this->field_07;
    }

    /**
     * Get the [field_08] column value.
     *
     * @return string
     */
    public function getField08()
    {
        return $this->field_08;
    }

    /**
     * Get the [field_09] column value.
     *
     * @return string
     */
    public function getField09()
    {
        return $this->field_09;
    }

    /**
     * Get the [field_10] column value.
     *
     * @return string
     */
    public function getField10()
    {
        return $this->field_10;
    }

    /**
     * Get the [field_11] column value.
     *
     * @return string
     */
    public function getField11()
    {
        return $this->field_11;
    }

    /**
     * Get the [field_12] column value.
     *
     * @return string
     */
    public function getField12()
    {
        return $this->field_12;
    }

    /**
     * Get the [field_13] column value.
     *
     * @return string
     */
    public function getField13()
    {
        return $this->field_13;
    }

    /**
     * Get the [field_14] column value.
     *
     * @return string
     */
    public function getField14()
    {
        return $this->field_14;
    }

    /**
     * Get the [field_15] column value.
     *
     * @return string
     */
    public function getField15()
    {
        return $this->field_15;
    }

    /**
     * Get the [field_16] column value.
     *
     * @return string
     */
    public function getField16()
    {
        return $this->field_16;
    }

    /**
     * Get the [field_17] column value.
     *
     * @return string
     */
    public function getField17()
    {
        return $this->field_17;
    }

    /**
     * Get the [field_18] column value.
     *
     * @return string
     */
    public function getField18()
    {
        return $this->field_18;
    }

    /**
     * Get the [field_19] column value.
     *
     * @return string
     */
    public function getField19()
    {
        return $this->field_19;
    }

    /**
     * Get the [field_20] column value.
     *
     * @return string
     */
    public function getField20()
    {
        return $this->field_20;
    }

    /**
     * Get the [field_21] column value.
     *
     * @return string
     */
    public function getField21()
    {
        return $this->field_21;
    }

    /**
     * Get the [field_22] column value.
     *
     * @return string
     */
    public function getField22()
    {
        return $this->field_22;
    }

    /**
     * Get the [field_23] column value.
     *
     * @return string
     */
    public function getField23()
    {
        return $this->field_23;
    }

    /**
     * Get the [field_24] column value.
     *
     * @return string
     */
    public function getField24()
    {
        return $this->field_24;
    }

    /**
     * Get the [field_25] column value.
     *
     * @return string
     */
    public function getField25()
    {
        return $this->field_25;
    }

    /**
     * Get the [field_26] column value.
     *
     * @return string
     */
    public function getField26()
    {
        return $this->field_26;
    }

    /**
     * Get the [field_27] column value.
     *
     * @return string
     */
    public function getField27()
    {
        return $this->field_27;
    }

    /**
     * Get the [field_28] column value.
     *
     * @return string
     */
    public function getField28()
    {
        return $this->field_28;
    }

    /**
     * Get the [field_29] column value.
     *
     * @return string
     */
    public function getField29()
    {
        return $this->field_29;
    }

    /**
     * Get the [field_30] column value.
     *
     * @return string
     */
    public function getField30()
    {
        return $this->field_30;
    }

    /**
     * Get the [field_31] column value.
     *
     * @return string
     */
    public function getField31()
    {
        return $this->field_31;
    }

    /**
     * Get the [field_32] column value.
     *
     * @return string
     */
    public function getField32()
    {
        return $this->field_32;
    }

    /**
     * Get the [field_33] column value.
     *
     * @return string
     */
    public function getField33()
    {
        return $this->field_33;
    }

    /**
     * Get the [field_34] column value.
     *
     * @return string
     */
    public function getField34()
    {
        return $this->field_34;
    }

    /**
     * Get the [field_35] column value.
     *
     * @return string
     */
    public function getField35()
    {
        return $this->field_35;
    }

    /**
     * Get the [field_36] column value.
     *
     * @return string
     */
    public function getField36()
    {
        return $this->field_36;
    }

    /**
     * Get the [field_37] column value.
     *
     * @return string
     */
    public function getField37()
    {
        return $this->field_37;
    }

    /**
     * Get the [field_38] column value.
     *
     * @return string
     */
    public function getField38()
    {
        return $this->field_38;
    }

    /**
     * Get the [field_39] column value.
     *
     * @return string
     */
    public function getField39()
    {
        return $this->field_39;
    }

    /**
     * Get the [field_40] column value.
     *
     * @return string
     */
    public function getField40()
    {
        return $this->field_40;
    }

    /**
     * Get the [field_41] column value.
     *
     * @return string
     */
    public function getField41()
    {
        return $this->field_41;
    }

    /**
     * Get the [field_42] column value.
     *
     * @return string
     */
    public function getField42()
    {
        return $this->field_42;
    }

    /**
     * Get the [field_43] column value.
     *
     * @return string
     */
    public function getField43()
    {
        return $this->field_43;
    }

    /**
     * Get the [field_44] column value.
     *
     * @return string
     */
    public function getField44()
    {
        return $this->field_44;
    }

    /**
     * Get the [field_45] column value.
     *
     * @return string
     */
    public function getField45()
    {
        return $this->field_45;
    }

    /**
     * Get the [field_46] column value.
     *
     * @return string
     */
    public function getField46()
    {
        return $this->field_46;
    }

    /**
     * Get the [field_47] column value.
     *
     * @return string
     */
    public function getField47()
    {
        return $this->field_47;
    }

    /**
     * Get the [field_48] column value.
     *
     * @return string
     */
    public function getField48()
    {
        return $this->field_48;
    }

    /**
     * Get the [field_49] column value.
     *
     * @return string
     */
    public function getField49()
    {
        return $this->field_49;
    }

    /**
     * Get the [field_50] column value.
     *
     * @return string
     */
    public function getField50()
    {
        return $this->field_50;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[BookTableMap::COL_ID] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_01] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_01 !== $v) {
            $this->field_01 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_01] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_02] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_02 !== $v) {
            $this->field_02 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_02] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_03] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_03 !== $v) {
            $this->field_03 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_03] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_04] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_04 !== $v) {
            $this->field_04 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_04] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_05] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_05 !== $v) {
            $this->field_05 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_05] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_06] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_06 !== $v) {
            $this->field_06 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_06] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_07] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_07 !== $v) {
            $this->field_07 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_07] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_08] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_08 !== $v) {
            $this->field_08 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_08] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_09] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_09 !== $v) {
            $this->field_09 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_09] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_10] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_10 !== $v) {
            $this->field_10 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_10] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_11] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_11 !== $v) {
            $this->field_11 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_11] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_12] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_12 !== $v) {
            $this->field_12 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_12] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_13] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_13 !== $v) {
            $this->field_13 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_13] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_14] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_14 !== $v) {
            $this->field_14 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_14] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_15] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_15 !== $v) {
            $this->field_15 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_15] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_16] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_16 !== $v) {
            $this->field_16 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_16] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_17] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_17 !== $v) {
            $this->field_17 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_17] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_18] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_18 !== $v) {
            $this->field_18 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_18] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_19] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_19 !== $v) {
            $this->field_19 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_19] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_20] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_20 !== $v) {
            $this->field_20 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_20] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_21] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField21($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_21 !== $v) {
            $this->field_21 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_21] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_22] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField22($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_22 !== $v) {
            $this->field_22 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_22] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_23] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField23($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_23 !== $v) {
            $this->field_23 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_23] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_24] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField24($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_24 !== $v) {
            $this->field_24 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_24] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_25] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField25($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_25 !== $v) {
            $this->field_25 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_25] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_26] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField26($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_26 !== $v) {
            $this->field_26 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_26] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_27] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField27($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_27 !== $v) {
            $this->field_27 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_27] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_28] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField28($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_28 !== $v) {
            $this->field_28 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_28] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_29] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField29($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_29 !== $v) {
            $this->field_29 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_29] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_30] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField30($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_30 !== $v) {
            $this->field_30 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_30] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_31] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField31($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_31 !== $v) {
            $this->field_31 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_31] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_32] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField32($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_32 !== $v) {
            $this->field_32 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_32] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_33] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField33($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_33 !== $v) {
            $this->field_33 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_33] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_34] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField34($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_34 !== $v) {
            $this->field_34 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_34] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_35] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField35($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_35 !== $v) {
            $this->field_35 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_35] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_36] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField36($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_36 !== $v) {
            $this->field_36 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_36] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_37] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField37($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_37 !== $v) {
            $this->field_37 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_37] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_38] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField38($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_38 !== $v) {
            $this->field_38 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_38] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_39] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField39($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_39 !== $v) {
            $this->field_39 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_39] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_40] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField40($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_40 !== $v) {
            $this->field_40 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_40] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_41] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField41($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_41 !== $v) {
            $this->field_41 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_41] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_42] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField42($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_42 !== $v) {
            $this->field_42 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_42] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_43] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField43($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_43 !== $v) {
            $this->field_43 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_43] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_44] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField44($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_44 !== $v) {
            $this->field_44 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_44] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_45] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField45($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_45 !== $v) {
            $this->field_45 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_45] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_46] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField46($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_46 !== $v) {
            $this->field_46 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_46] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_47] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField47($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_47 !== $v) {
            $this->field_47 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_47] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_48] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField48($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_48 !== $v) {
            $this->field_48 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_48] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_49] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField49($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_49 !== $v) {
            $this->field_49 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_49] = true;
        }

        return $this;
    }

    /**
     * Set the value of [field_50] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setField50($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->field_50 !== $v) {
            $this->field_50 = $v;
            $this->modifiedColumns[BookTableMap::COL_FIELD_50] = true;
        }

        return $this;
    }

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return bool Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues(): bool
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    }

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by DataFetcher->fetch().
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param bool $rehydrate Whether this object is being re-hydrated from the database.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int next starting column
     * @throws \Propel\Runtime\Exception\PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(array $row, int $startcol = 0, bool $rehydrate = false, string $indexType = TableMap::TYPE_NUM): int
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : BookTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : BookTableMap::translateFieldName('Field01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : BookTableMap::translateFieldName('Field02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : BookTableMap::translateFieldName('Field03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : BookTableMap::translateFieldName('Field04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : BookTableMap::translateFieldName('Field05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : BookTableMap::translateFieldName('Field06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : BookTableMap::translateFieldName('Field07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : BookTableMap::translateFieldName('Field08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : BookTableMap::translateFieldName('Field09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : BookTableMap::translateFieldName('Field10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : BookTableMap::translateFieldName('Field11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : BookTableMap::translateFieldName('Field12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : BookTableMap::translateFieldName('Field13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : BookTableMap::translateFieldName('Field14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : BookTableMap::translateFieldName('Field15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : BookTableMap::translateFieldName('Field16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : BookTableMap::translateFieldName('Field17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : BookTableMap::translateFieldName('Field18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : BookTableMap::translateFieldName('Field19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : BookTableMap::translateFieldName('Field20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_20 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : BookTableMap::translateFieldName('Field21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_21 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : BookTableMap::translateFieldName('Field22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_22 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : BookTableMap::translateFieldName('Field23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_23 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : BookTableMap::translateFieldName('Field24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_24 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : BookTableMap::translateFieldName('Field25', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_25 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : BookTableMap::translateFieldName('Field26', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_26 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : BookTableMap::translateFieldName('Field27', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_27 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : BookTableMap::translateFieldName('Field28', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_28 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : BookTableMap::translateFieldName('Field29', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_29 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : BookTableMap::translateFieldName('Field30', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_30 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : BookTableMap::translateFieldName('Field31', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_31 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : BookTableMap::translateFieldName('Field32', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_32 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : BookTableMap::translateFieldName('Field33', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_33 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : BookTableMap::translateFieldName('Field34', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_34 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : BookTableMap::translateFieldName('Field35', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_35 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : BookTableMap::translateFieldName('Field36', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_36 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : BookTableMap::translateFieldName('Field37', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_37 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : BookTableMap::translateFieldName('Field38', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_38 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : BookTableMap::translateFieldName('Field39', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_39 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : BookTableMap::translateFieldName('Field40', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_40 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : BookTableMap::translateFieldName('Field41', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_41 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : BookTableMap::translateFieldName('Field42', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_42 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : BookTableMap::translateFieldName('Field43', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_43 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : BookTableMap::translateFieldName('Field44', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_44 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : BookTableMap::translateFieldName('Field45', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_45 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : BookTableMap::translateFieldName('Field46', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_46 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : BookTableMap::translateFieldName('Field47', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_47 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : BookTableMap::translateFieldName('Field48', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_48 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : BookTableMap::translateFieldName('Field49', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_49 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : BookTableMap::translateFieldName('Field50', TableMap::TYPE_PHPNAME, $indexType)];
            $this->field_50 = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 51; // 51 = BookTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\App\\Model\\Book'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function ensureConsistency(): void
    {
    }

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param bool $deep (optional) Whether to also de-associated any related objects.
     * @param ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload(bool $deep = false, ?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildBookQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see Book::setDeleted()
     * @see Book::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildBookQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    public function save(?ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                BookTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    }

    /**
     * Insert the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = [];
        $index = 0;

        $this->modifiedColumns[BookTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BookTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BookTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_01)) {
            $modifiedColumns[':p' . $index++]  = 'field_01';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_02)) {
            $modifiedColumns[':p' . $index++]  = 'field_02';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_03)) {
            $modifiedColumns[':p' . $index++]  = 'field_03';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_04)) {
            $modifiedColumns[':p' . $index++]  = 'field_04';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_05)) {
            $modifiedColumns[':p' . $index++]  = 'field_05';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_06)) {
            $modifiedColumns[':p' . $index++]  = 'field_06';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_07)) {
            $modifiedColumns[':p' . $index++]  = 'field_07';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_08)) {
            $modifiedColumns[':p' . $index++]  = 'field_08';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_09)) {
            $modifiedColumns[':p' . $index++]  = 'field_09';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_10)) {
            $modifiedColumns[':p' . $index++]  = 'field_10';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_11)) {
            $modifiedColumns[':p' . $index++]  = 'field_11';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_12)) {
            $modifiedColumns[':p' . $index++]  = 'field_12';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_13)) {
            $modifiedColumns[':p' . $index++]  = 'field_13';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_14)) {
            $modifiedColumns[':p' . $index++]  = 'field_14';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_15)) {
            $modifiedColumns[':p' . $index++]  = 'field_15';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_16)) {
            $modifiedColumns[':p' . $index++]  = 'field_16';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_17)) {
            $modifiedColumns[':p' . $index++]  = 'field_17';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_18)) {
            $modifiedColumns[':p' . $index++]  = 'field_18';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_19)) {
            $modifiedColumns[':p' . $index++]  = 'field_19';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_20)) {
            $modifiedColumns[':p' . $index++]  = 'field_20';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_21)) {
            $modifiedColumns[':p' . $index++]  = 'field_21';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_22)) {
            $modifiedColumns[':p' . $index++]  = 'field_22';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_23)) {
            $modifiedColumns[':p' . $index++]  = 'field_23';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_24)) {
            $modifiedColumns[':p' . $index++]  = 'field_24';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_25)) {
            $modifiedColumns[':p' . $index++]  = 'field_25';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_26)) {
            $modifiedColumns[':p' . $index++]  = 'field_26';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_27)) {
            $modifiedColumns[':p' . $index++]  = 'field_27';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_28)) {
            $modifiedColumns[':p' . $index++]  = 'field_28';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_29)) {
            $modifiedColumns[':p' . $index++]  = 'field_29';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_30)) {
            $modifiedColumns[':p' . $index++]  = 'field_30';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_31)) {
            $modifiedColumns[':p' . $index++]  = 'field_31';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_32)) {
            $modifiedColumns[':p' . $index++]  = 'field_32';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_33)) {
            $modifiedColumns[':p' . $index++]  = 'field_33';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_34)) {
            $modifiedColumns[':p' . $index++]  = 'field_34';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_35)) {
            $modifiedColumns[':p' . $index++]  = 'field_35';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_36)) {
            $modifiedColumns[':p' . $index++]  = 'field_36';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_37)) {
            $modifiedColumns[':p' . $index++]  = 'field_37';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_38)) {
            $modifiedColumns[':p' . $index++]  = 'field_38';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_39)) {
            $modifiedColumns[':p' . $index++]  = 'field_39';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_40)) {
            $modifiedColumns[':p' . $index++]  = 'field_40';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_41)) {
            $modifiedColumns[':p' . $index++]  = 'field_41';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_42)) {
            $modifiedColumns[':p' . $index++]  = 'field_42';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_43)) {
            $modifiedColumns[':p' . $index++]  = 'field_43';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_44)) {
            $modifiedColumns[':p' . $index++]  = 'field_44';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_45)) {
            $modifiedColumns[':p' . $index++]  = 'field_45';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_46)) {
            $modifiedColumns[':p' . $index++]  = 'field_46';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_47)) {
            $modifiedColumns[':p' . $index++]  = 'field_47';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_48)) {
            $modifiedColumns[':p' . $index++]  = 'field_48';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_49)) {
            $modifiedColumns[':p' . $index++]  = 'field_49';
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_50)) {
            $modifiedColumns[':p' . $index++]  = 'field_50';
        }

        $sql = sprintf(
            'INSERT INTO book (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'field_01':
                        $stmt->bindValue($identifier, $this->field_01, PDO::PARAM_STR);
                        break;
                    case 'field_02':
                        $stmt->bindValue($identifier, $this->field_02, PDO::PARAM_STR);
                        break;
                    case 'field_03':
                        $stmt->bindValue($identifier, $this->field_03, PDO::PARAM_STR);
                        break;
                    case 'field_04':
                        $stmt->bindValue($identifier, $this->field_04, PDO::PARAM_STR);
                        break;
                    case 'field_05':
                        $stmt->bindValue($identifier, $this->field_05, PDO::PARAM_STR);
                        break;
                    case 'field_06':
                        $stmt->bindValue($identifier, $this->field_06, PDO::PARAM_STR);
                        break;
                    case 'field_07':
                        $stmt->bindValue($identifier, $this->field_07, PDO::PARAM_STR);
                        break;
                    case 'field_08':
                        $stmt->bindValue($identifier, $this->field_08, PDO::PARAM_STR);
                        break;
                    case 'field_09':
                        $stmt->bindValue($identifier, $this->field_09, PDO::PARAM_STR);
                        break;
                    case 'field_10':
                        $stmt->bindValue($identifier, $this->field_10, PDO::PARAM_STR);
                        break;
                    case 'field_11':
                        $stmt->bindValue($identifier, $this->field_11, PDO::PARAM_STR);
                        break;
                    case 'field_12':
                        $stmt->bindValue($identifier, $this->field_12, PDO::PARAM_STR);
                        break;
                    case 'field_13':
                        $stmt->bindValue($identifier, $this->field_13, PDO::PARAM_STR);
                        break;
                    case 'field_14':
                        $stmt->bindValue($identifier, $this->field_14, PDO::PARAM_STR);
                        break;
                    case 'field_15':
                        $stmt->bindValue($identifier, $this->field_15, PDO::PARAM_STR);
                        break;
                    case 'field_16':
                        $stmt->bindValue($identifier, $this->field_16, PDO::PARAM_STR);
                        break;
                    case 'field_17':
                        $stmt->bindValue($identifier, $this->field_17, PDO::PARAM_STR);
                        break;
                    case 'field_18':
                        $stmt->bindValue($identifier, $this->field_18, PDO::PARAM_STR);
                        break;
                    case 'field_19':
                        $stmt->bindValue($identifier, $this->field_19, PDO::PARAM_STR);
                        break;
                    case 'field_20':
                        $stmt->bindValue($identifier, $this->field_20, PDO::PARAM_STR);
                        break;
                    case 'field_21':
                        $stmt->bindValue($identifier, $this->field_21, PDO::PARAM_STR);
                        break;
                    case 'field_22':
                        $stmt->bindValue($identifier, $this->field_22, PDO::PARAM_STR);
                        break;
                    case 'field_23':
                        $stmt->bindValue($identifier, $this->field_23, PDO::PARAM_STR);
                        break;
                    case 'field_24':
                        $stmt->bindValue($identifier, $this->field_24, PDO::PARAM_STR);
                        break;
                    case 'field_25':
                        $stmt->bindValue($identifier, $this->field_25, PDO::PARAM_STR);
                        break;
                    case 'field_26':
                        $stmt->bindValue($identifier, $this->field_26, PDO::PARAM_STR);
                        break;
                    case 'field_27':
                        $stmt->bindValue($identifier, $this->field_27, PDO::PARAM_STR);
                        break;
                    case 'field_28':
                        $stmt->bindValue($identifier, $this->field_28, PDO::PARAM_STR);
                        break;
                    case 'field_29':
                        $stmt->bindValue($identifier, $this->field_29, PDO::PARAM_STR);
                        break;
                    case 'field_30':
                        $stmt->bindValue($identifier, $this->field_30, PDO::PARAM_STR);
                        break;
                    case 'field_31':
                        $stmt->bindValue($identifier, $this->field_31, PDO::PARAM_STR);
                        break;
                    case 'field_32':
                        $stmt->bindValue($identifier, $this->field_32, PDO::PARAM_STR);
                        break;
                    case 'field_33':
                        $stmt->bindValue($identifier, $this->field_33, PDO::PARAM_STR);
                        break;
                    case 'field_34':
                        $stmt->bindValue($identifier, $this->field_34, PDO::PARAM_STR);
                        break;
                    case 'field_35':
                        $stmt->bindValue($identifier, $this->field_35, PDO::PARAM_STR);
                        break;
                    case 'field_36':
                        $stmt->bindValue($identifier, $this->field_36, PDO::PARAM_STR);
                        break;
                    case 'field_37':
                        $stmt->bindValue($identifier, $this->field_37, PDO::PARAM_STR);
                        break;
                    case 'field_38':
                        $stmt->bindValue($identifier, $this->field_38, PDO::PARAM_STR);
                        break;
                    case 'field_39':
                        $stmt->bindValue($identifier, $this->field_39, PDO::PARAM_STR);
                        break;
                    case 'field_40':
                        $stmt->bindValue($identifier, $this->field_40, PDO::PARAM_STR);
                        break;
                    case 'field_41':
                        $stmt->bindValue($identifier, $this->field_41, PDO::PARAM_STR);
                        break;
                    case 'field_42':
                        $stmt->bindValue($identifier, $this->field_42, PDO::PARAM_STR);
                        break;
                    case 'field_43':
                        $stmt->bindValue($identifier, $this->field_43, PDO::PARAM_STR);
                        break;
                    case 'field_44':
                        $stmt->bindValue($identifier, $this->field_44, PDO::PARAM_STR);
                        break;
                    case 'field_45':
                        $stmt->bindValue($identifier, $this->field_45, PDO::PARAM_STR);
                        break;
                    case 'field_46':
                        $stmt->bindValue($identifier, $this->field_46, PDO::PARAM_STR);
                        break;
                    case 'field_47':
                        $stmt->bindValue($identifier, $this->field_47, PDO::PARAM_STR);
                        break;
                    case 'field_48':
                        $stmt->bindValue($identifier, $this->field_48, PDO::PARAM_STR);
                        break;
                    case 'field_49':
                        $stmt->bindValue($identifier, $this->field_49, PDO::PARAM_STR);
                        break;
                    case 'field_50':
                        $stmt->bindValue($identifier, $this->field_50, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @return int Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con): int
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName(string $name, string $type = TableMap::TYPE_PHPNAME)
    {
        $pos = BookTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos Position in XML schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition(int $pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getField01();
                break;
            case 2:
                return $this->getField02();
                break;
            case 3:
                return $this->getField03();
                break;
            case 4:
                return $this->getField04();
                break;
            case 5:
                return $this->getField05();
                break;
            case 6:
                return $this->getField06();
                break;
            case 7:
                return $this->getField07();
                break;
            case 8:
                return $this->getField08();
                break;
            case 9:
                return $this->getField09();
                break;
            case 10:
                return $this->getField10();
                break;
            case 11:
                return $this->getField11();
                break;
            case 12:
                return $this->getField12();
                break;
            case 13:
                return $this->getField13();
                break;
            case 14:
                return $this->getField14();
                break;
            case 15:
                return $this->getField15();
                break;
            case 16:
                return $this->getField16();
                break;
            case 17:
                return $this->getField17();
                break;
            case 18:
                return $this->getField18();
                break;
            case 19:
                return $this->getField19();
                break;
            case 20:
                return $this->getField20();
                break;
            case 21:
                return $this->getField21();
                break;
            case 22:
                return $this->getField22();
                break;
            case 23:
                return $this->getField23();
                break;
            case 24:
                return $this->getField24();
                break;
            case 25:
                return $this->getField25();
                break;
            case 26:
                return $this->getField26();
                break;
            case 27:
                return $this->getField27();
                break;
            case 28:
                return $this->getField28();
                break;
            case 29:
                return $this->getField29();
                break;
            case 30:
                return $this->getField30();
                break;
            case 31:
                return $this->getField31();
                break;
            case 32:
                return $this->getField32();
                break;
            case 33:
                return $this->getField33();
                break;
            case 34:
                return $this->getField34();
                break;
            case 35:
                return $this->getField35();
                break;
            case 36:
                return $this->getField36();
                break;
            case 37:
                return $this->getField37();
                break;
            case 38:
                return $this->getField38();
                break;
            case 39:
                return $this->getField39();
                break;
            case 40:
                return $this->getField40();
                break;
            case 41:
                return $this->getField41();
                break;
            case 42:
                return $this->getField42();
                break;
            case 43:
                return $this->getField43();
                break;
            case 44:
                return $this->getField44();
                break;
            case 45:
                return $this->getField45();
                break;
            case 46:
                return $this->getField46();
                break;
            case 47:
                return $this->getField47();
                break;
            case 48:
                return $this->getField48();
                break;
            case 49:
                return $this->getField49();
                break;
            case 50:
                return $this->getField50();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array An associative array containing the field names (as keys) and field values
     */
    public function toArray(string $keyType = TableMap::TYPE_PHPNAME, bool $includeLazyLoadColumns = true, array $alreadyDumpedObjects = []): array
    {
        if (isset($alreadyDumpedObjects['Book'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['Book'][$this->hashCode()] = true;
        $keys = BookTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getId(),
            $keys[1] => $this->getField01(),
            $keys[2] => $this->getField02(),
            $keys[3] => $this->getField03(),
            $keys[4] => $this->getField04(),
            $keys[5] => $this->getField05(),
            $keys[6] => $this->getField06(),
            $keys[7] => $this->getField07(),
            $keys[8] => $this->getField08(),
            $keys[9] => $this->getField09(),
            $keys[10] => $this->getField10(),
            $keys[11] => $this->getField11(),
            $keys[12] => $this->getField12(),
            $keys[13] => $this->getField13(),
            $keys[14] => $this->getField14(),
            $keys[15] => $this->getField15(),
            $keys[16] => $this->getField16(),
            $keys[17] => $this->getField17(),
            $keys[18] => $this->getField18(),
            $keys[19] => $this->getField19(),
            $keys[20] => $this->getField20(),
            $keys[21] => $this->getField21(),
            $keys[22] => $this->getField22(),
            $keys[23] => $this->getField23(),
            $keys[24] => $this->getField24(),
            $keys[25] => $this->getField25(),
            $keys[26] => $this->getField26(),
            $keys[27] => $this->getField27(),
            $keys[28] => $this->getField28(),
            $keys[29] => $this->getField29(),
            $keys[30] => $this->getField30(),
            $keys[31] => $this->getField31(),
            $keys[32] => $this->getField32(),
            $keys[33] => $this->getField33(),
            $keys[34] => $this->getField34(),
            $keys[35] => $this->getField35(),
            $keys[36] => $this->getField36(),
            $keys[37] => $this->getField37(),
            $keys[38] => $this->getField38(),
            $keys[39] => $this->getField39(),
            $keys[40] => $this->getField40(),
            $keys[41] => $this->getField41(),
            $keys[42] => $this->getField42(),
            $keys[43] => $this->getField43(),
            $keys[44] => $this->getField44(),
            $keys[45] => $this->getField45(),
            $keys[46] => $this->getField46(),
            $keys[47] => $this->getField47(),
            $keys[48] => $this->getField48(),
            $keys[49] => $this->getField49(),
            $keys[50] => $this->getField50(),
        ];
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this
     */
    public function setByName(string $name, $value, string $type = TableMap::TYPE_PHPNAME)
    {
        $pos = BookTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        $this->setByPosition($pos, $value);

        return $this;
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return $this
     */
    public function setByPosition(int $pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setField01($value);
                break;
            case 2:
                $this->setField02($value);
                break;
            case 3:
                $this->setField03($value);
                break;
            case 4:
                $this->setField04($value);
                break;
            case 5:
                $this->setField05($value);
                break;
            case 6:
                $this->setField06($value);
                break;
            case 7:
                $this->setField07($value);
                break;
            case 8:
                $this->setField08($value);
                break;
            case 9:
                $this->setField09($value);
                break;
            case 10:
                $this->setField10($value);
                break;
            case 11:
                $this->setField11($value);
                break;
            case 12:
                $this->setField12($value);
                break;
            case 13:
                $this->setField13($value);
                break;
            case 14:
                $this->setField14($value);
                break;
            case 15:
                $this->setField15($value);
                break;
            case 16:
                $this->setField16($value);
                break;
            case 17:
                $this->setField17($value);
                break;
            case 18:
                $this->setField18($value);
                break;
            case 19:
                $this->setField19($value);
                break;
            case 20:
                $this->setField20($value);
                break;
            case 21:
                $this->setField21($value);
                break;
            case 22:
                $this->setField22($value);
                break;
            case 23:
                $this->setField23($value);
                break;
            case 24:
                $this->setField24($value);
                break;
            case 25:
                $this->setField25($value);
                break;
            case 26:
                $this->setField26($value);
                break;
            case 27:
                $this->setField27($value);
                break;
            case 28:
                $this->setField28($value);
                break;
            case 29:
                $this->setField29($value);
                break;
            case 30:
                $this->setField30($value);
                break;
            case 31:
                $this->setField31($value);
                break;
            case 32:
                $this->setField32($value);
                break;
            case 33:
                $this->setField33($value);
                break;
            case 34:
                $this->setField34($value);
                break;
            case 35:
                $this->setField35($value);
                break;
            case 36:
                $this->setField36($value);
                break;
            case 37:
                $this->setField37($value);
                break;
            case 38:
                $this->setField38($value);
                break;
            case 39:
                $this->setField39($value);
                break;
            case 40:
                $this->setField40($value);
                break;
            case 41:
                $this->setField41($value);
                break;
            case 42:
                $this->setField42($value);
                break;
            case 43:
                $this->setField43($value);
                break;
            case 44:
                $this->setField44($value);
                break;
            case 45:
                $this->setField45($value);
                break;
            case 46:
                $this->setField46($value);
                break;
            case 47:
                $this->setField47($value);
                break;
            case 48:
                $this->setField48($value);
                break;
            case 49:
                $this->setField49($value);
                break;
            case 50:
                $this->setField50($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param array $arr An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return $this
     */
    public function fromArray(array $arr, string $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = BookTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setField01($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setField02($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setField03($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setField04($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setField05($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setField06($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setField07($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setField08($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setField09($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setField10($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setField11($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setField12($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setField13($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setField14($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setField15($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setField16($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setField17($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setField18($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setField19($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setField20($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setField21($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setField22($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setField23($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setField24($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setField25($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setField26($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setField27($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setField28($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setField29($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setField30($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setField31($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setField32($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setField33($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setField34($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setField35($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setField36($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setField37($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setField38($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setField39($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setField40($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setField41($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setField42($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setField43($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setField44($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setField45($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setField46($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setField47($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setField48($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setField49($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setField50($arr[$keys[50]]);
        }

        return $this;
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this The current object, for fluid interface
     */
    public function importFrom($parser, string $data, string $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria(): Criteria
    {
        $criteria = new Criteria(BookTableMap::DATABASE_NAME);

        if ($this->isColumnModified(BookTableMap::COL_ID)) {
            $criteria->add(BookTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_01)) {
            $criteria->add(BookTableMap::COL_FIELD_01, $this->field_01);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_02)) {
            $criteria->add(BookTableMap::COL_FIELD_02, $this->field_02);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_03)) {
            $criteria->add(BookTableMap::COL_FIELD_03, $this->field_03);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_04)) {
            $criteria->add(BookTableMap::COL_FIELD_04, $this->field_04);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_05)) {
            $criteria->add(BookTableMap::COL_FIELD_05, $this->field_05);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_06)) {
            $criteria->add(BookTableMap::COL_FIELD_06, $this->field_06);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_07)) {
            $criteria->add(BookTableMap::COL_FIELD_07, $this->field_07);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_08)) {
            $criteria->add(BookTableMap::COL_FIELD_08, $this->field_08);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_09)) {
            $criteria->add(BookTableMap::COL_FIELD_09, $this->field_09);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_10)) {
            $criteria->add(BookTableMap::COL_FIELD_10, $this->field_10);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_11)) {
            $criteria->add(BookTableMap::COL_FIELD_11, $this->field_11);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_12)) {
            $criteria->add(BookTableMap::COL_FIELD_12, $this->field_12);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_13)) {
            $criteria->add(BookTableMap::COL_FIELD_13, $this->field_13);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_14)) {
            $criteria->add(BookTableMap::COL_FIELD_14, $this->field_14);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_15)) {
            $criteria->add(BookTableMap::COL_FIELD_15, $this->field_15);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_16)) {
            $criteria->add(BookTableMap::COL_FIELD_16, $this->field_16);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_17)) {
            $criteria->add(BookTableMap::COL_FIELD_17, $this->field_17);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_18)) {
            $criteria->add(BookTableMap::COL_FIELD_18, $this->field_18);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_19)) {
            $criteria->add(BookTableMap::COL_FIELD_19, $this->field_19);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_20)) {
            $criteria->add(BookTableMap::COL_FIELD_20, $this->field_20);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_21)) {
            $criteria->add(BookTableMap::COL_FIELD_21, $this->field_21);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_22)) {
            $criteria->add(BookTableMap::COL_FIELD_22, $this->field_22);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_23)) {
            $criteria->add(BookTableMap::COL_FIELD_23, $this->field_23);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_24)) {
            $criteria->add(BookTableMap::COL_FIELD_24, $this->field_24);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_25)) {
            $criteria->add(BookTableMap::COL_FIELD_25, $this->field_25);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_26)) {
            $criteria->add(BookTableMap::COL_FIELD_26, $this->field_26);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_27)) {
            $criteria->add(BookTableMap::COL_FIELD_27, $this->field_27);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_28)) {
            $criteria->add(BookTableMap::COL_FIELD_28, $this->field_28);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_29)) {
            $criteria->add(BookTableMap::COL_FIELD_29, $this->field_29);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_30)) {
            $criteria->add(BookTableMap::COL_FIELD_30, $this->field_30);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_31)) {
            $criteria->add(BookTableMap::COL_FIELD_31, $this->field_31);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_32)) {
            $criteria->add(BookTableMap::COL_FIELD_32, $this->field_32);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_33)) {
            $criteria->add(BookTableMap::COL_FIELD_33, $this->field_33);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_34)) {
            $criteria->add(BookTableMap::COL_FIELD_34, $this->field_34);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_35)) {
            $criteria->add(BookTableMap::COL_FIELD_35, $this->field_35);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_36)) {
            $criteria->add(BookTableMap::COL_FIELD_36, $this->field_36);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_37)) {
            $criteria->add(BookTableMap::COL_FIELD_37, $this->field_37);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_38)) {
            $criteria->add(BookTableMap::COL_FIELD_38, $this->field_38);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_39)) {
            $criteria->add(BookTableMap::COL_FIELD_39, $this->field_39);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_40)) {
            $criteria->add(BookTableMap::COL_FIELD_40, $this->field_40);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_41)) {
            $criteria->add(BookTableMap::COL_FIELD_41, $this->field_41);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_42)) {
            $criteria->add(BookTableMap::COL_FIELD_42, $this->field_42);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_43)) {
            $criteria->add(BookTableMap::COL_FIELD_43, $this->field_43);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_44)) {
            $criteria->add(BookTableMap::COL_FIELD_44, $this->field_44);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_45)) {
            $criteria->add(BookTableMap::COL_FIELD_45, $this->field_45);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_46)) {
            $criteria->add(BookTableMap::COL_FIELD_46, $this->field_46);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_47)) {
            $criteria->add(BookTableMap::COL_FIELD_47, $this->field_47);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_48)) {
            $criteria->add(BookTableMap::COL_FIELD_48, $this->field_48);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_49)) {
            $criteria->add(BookTableMap::COL_FIELD_49, $this->field_49);
        }
        if ($this->isColumnModified(BookTableMap::COL_FIELD_50)) {
            $criteria->add(BookTableMap::COL_FIELD_50, $this->field_50);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria(): Criteria
    {
        $criteria = ChildBookQuery::create();
        $criteria->add(BookTableMap::COL_ID, $this->id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int|string Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key): void
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \App\Model\Book (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setField01($this->getField01());
        $copyObj->setField02($this->getField02());
        $copyObj->setField03($this->getField03());
        $copyObj->setField04($this->getField04());
        $copyObj->setField05($this->getField05());
        $copyObj->setField06($this->getField06());
        $copyObj->setField07($this->getField07());
        $copyObj->setField08($this->getField08());
        $copyObj->setField09($this->getField09());
        $copyObj->setField10($this->getField10());
        $copyObj->setField11($this->getField11());
        $copyObj->setField12($this->getField12());
        $copyObj->setField13($this->getField13());
        $copyObj->setField14($this->getField14());
        $copyObj->setField15($this->getField15());
        $copyObj->setField16($this->getField16());
        $copyObj->setField17($this->getField17());
        $copyObj->setField18($this->getField18());
        $copyObj->setField19($this->getField19());
        $copyObj->setField20($this->getField20());
        $copyObj->setField21($this->getField21());
        $copyObj->setField22($this->getField22());
        $copyObj->setField23($this->getField23());
        $copyObj->setField24($this->getField24());
        $copyObj->setField25($this->getField25());
        $copyObj->setField26($this->getField26());
        $copyObj->setField27($this->getField27());
        $copyObj->setField28($this->getField28());
        $copyObj->setField29($this->getField29());
        $copyObj->setField30($this->getField30());
        $copyObj->setField31($this->getField31());
        $copyObj->setField32($this->getField32());
        $copyObj->setField33($this->getField33());
        $copyObj->setField34($this->getField34());
        $copyObj->setField35($this->getField35());
        $copyObj->setField36($this->getField36());
        $copyObj->setField37($this->getField37());
        $copyObj->setField38($this->getField38());
        $copyObj->setField39($this->getField39());
        $copyObj->setField40($this->getField40());
        $copyObj->setField41($this->getField41());
        $copyObj->setField42($this->getField42());
        $copyObj->setField43($this->getField43());
        $copyObj->setField44($this->getField44());
        $copyObj->setField45($this->getField45());
        $copyObj->setField46($this->getField46());
        $copyObj->setField47($this->getField47());
        $copyObj->setField48($this->getField48());
        $copyObj->setField49($this->getField49());
        $copyObj->setField50($this->getField50());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \App\Model\Book Clone of current object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function copy(bool $deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     *
     * @return $this
     */
    public function clear()
    {
        $this->id = null;
        $this->field_01 = null;
        $this->field_02 = null;
        $this->field_03 = null;
        $this->field_04 = null;
        $this->field_05 = null;
        $this->field_06 = null;
        $this->field_07 = null;
        $this->field_08 = null;
        $this->field_09 = null;
        $this->field_10 = null;
        $this->field_11 = null;
        $this->field_12 = null;
        $this->field_13 = null;
        $this->field_14 = null;
        $this->field_15 = null;
        $this->field_16 = null;
        $this->field_17 = null;
        $this->field_18 = null;
        $this->field_19 = null;
        $this->field_20 = null;
        $this->field_21 = null;
        $this->field_22 = null;
        $this->field_23 = null;
        $this->field_24 = null;
        $this->field_25 = null;
        $this->field_26 = null;
        $this->field_27 = null;
        $this->field_28 = null;
        $this->field_29 = null;
        $this->field_30 = null;
        $this->field_31 = null;
        $this->field_32 = null;
        $this->field_33 = null;
        $this->field_34 = null;
        $this->field_35 = null;
        $this->field_36 = null;
        $this->field_37 = null;
        $this->field_38 = null;
        $this->field_39 = null;
        $this->field_40 = null;
        $this->field_41 = null;
        $this->field_42 = null;
        $this->field_43 = null;
        $this->field_44 = null;
        $this->field_45 = null;
        $this->field_46 = null;
        $this->field_47 = null;
        $this->field_48 = null;
        $this->field_49 = null;
        $this->field_50 = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);

        return $this;
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param bool $deep Whether to also clear the references on all referrer objects.
     * @return $this
     */
    public function clearAllReferences(bool $deep = false)
    {
        if ($deep) {
        } // if ($deep)

        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BookTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preSave(?ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postSave(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before inserting to database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preInsert(?ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postInsert(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preUpdate(?ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postUpdate(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before deleting the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preDelete(?ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postDelete(?ConnectionInterface $con = null): void
    {
            }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
