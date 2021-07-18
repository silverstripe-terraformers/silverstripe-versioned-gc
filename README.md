# SilverStripe Garbage Collection Module

[![PHPUnit](https://github.com/brettt89/silverstripe-versioned-gc/actions/workflows/php.yml/badge.svg)](https://github.com/brettt89/silverstripe-versioned-gc/actions/workflows/php.yml) [![codecov](https://codecov.io/gh/brettt89/silverstripe-versioned-gc/branch/master/graph/badge.svg?token=FEEEJP8377)](https://codecov.io/gh/brettt89/silverstripe-versioned-gc)

:warning: :warning: **Warning: *In Development - Not Production Ready!*** :warning: :warning:

## Overview

Garbage Collection for Silverstripe Versioned module using [Silverstripe Garbage Collector](https://github.com/brettt89/silverstripe-garbage-collector).

## Installation

```
composer require brettt89/silverstripe-versioned-gc
```

## Configuration

By default, `VersionedCollector` and `ChangeSetCollector` are enabled.

Configuration can be managed via Configuration API. Defauts can be found below for overriding via application configuration.

```
---
Name: DefaultGarbageCollection
---
SilverStripe\VersionedGC\VersionedCollector:
  keep_limit: 2
  keep_lifetime: 180
  deletion_record_limit: 100
  deletion_version_limit: 100
  query_limit: 10
  base_classes:
    - SilverStripe\CMS\Model\SiteTree
  processors:
    - SilverStripe\GarbageCollector\Processors\SQLExpressionProcessor

SilverStripe\VersionedGC\ChangeSetCollector:
  deletion_lifetime: 100
  deletion_limit: 100
  query_limit: 5
  processors:
    - SilverStripe\GarbageCollector\Processors\SQLExpressionProcessor

```

### Versioned Collector

 - **keep_limit**: Integer - Number of Version records to always maintain.
 - **keep_lifetime**: Integer - Age of records required for deletion.
 - **deletion_record_limit**: Integer - Maximum number of base records for collection.
 - **deletion_version_limit**: Integer - Maximum number of version records for collection.
 - **query_limit**: Integer - Maximum number of SQL Queries to return in collection.
 - **base_classes**: Array of Strings - Base classes to be collected against.
 - **processors**: Array of Strings - Processor classes fot executing collection.

### ChangeSet Collector

 - **deletion_lifetime**: Integer - Age of records required for deletion..
 - **deletion_limit**: Integer - Maximum number of ChangeSet records for collection.
 - **query_limit**: Integer - Maximum number of SQL Queries to return in Collection.
 - **processors**: Array of Strings - Processor classes fot executing collection.