<?php

namespace App;

class LitteralBuilder implements QueryBuilderInterface
{
    protected string $select;
    protected string $from;
    protected string $where;
    protected string $orderBy;

    public function select(string $fields): QueryBuilderInterface
    {
        $this->select = $fields;
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->from = $table;
        return $this;
    }

    public function where(string $condition): QueryBuilderInterface
    {
        $this->where = $condition;
        return $this;
    }

    public function orderBy(string $condition): QueryBuilderInterface
    {
        $this->orderBy = $condition;
        return $this;
    }

    public function getQuery(): string
    {
        return "Je selectionne {$this->select} de la table {$this->from} où {$this->where} trié par {$this->orderBy};";
    }
}