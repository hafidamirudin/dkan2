<?php

namespace Drupal\dkan_datastore\Storage;

/**
 * Simple object for storing summary information.
 *
 * @todo Use JSON Schema maybe to validate this?
 */
class TableSummary implements \JsonSerializable {
  private $numOfColumns;
  private $columns;
  private $numOfRows;

  /**
   * Constructor.
   */
  public function __construct(int $numOfColumns, array $columns, int $numOfRows) {
    $this->numOfColumns = $numOfColumns;
    $this->columns = $columns;
    $this->numOfRows = $numOfRows;
  }

  /**
   * Inherited.
   *
   * {@inheritDoc}
   */
  public function jsonSerialize() {
    return [
      'numOfColumns' => $this->numOfColumns,
      'columns' => $this->columns,
      'numOfRows' => $this->numOfRows,
    ];
  }

}
