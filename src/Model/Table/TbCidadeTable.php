<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbCidade Model
 *
 * @method \App\Model\Entity\TbCidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\TbCidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TbCidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TbCidade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbCidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbCidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TbCidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TbCidade findOrCreate($search, callable $callback = null, $options = [])
 */
class TbCidadeTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tb_cidade');
        $this->setDisplayField('id_cidade');
        $this->setPrimaryKey('id_cidade');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_cidade')
            ->allowEmptyString('id_cidade', null, 'create');

        $validator
            ->scalar('nome_cidade')
            ->maxLength('nome_cidade', 50)
            ->requirePresence('nome_cidade', 'create')
            ->notEmptyString('nome_cidade');

        $validator
            ->scalar('pais_cidade')
            ->maxLength('pais_cidade', 50)
            ->requirePresence('pais_cidade', 'create')
            ->notEmptyString('pais_cidade');

        return $validator;
    }
}
