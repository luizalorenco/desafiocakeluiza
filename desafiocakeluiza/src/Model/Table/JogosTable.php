<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jogos Model
 *
 * @property \App\Model\Table\ConsolesTable&\Cake\ORM\Association\BelongsTo $Consoles
 *
 * @method \App\Model\Entity\Jogo newEmptyEntity()
 * @method \App\Model\Entity\Jogo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Jogo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jogo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jogo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Jogo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jogo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jogo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jogo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jogo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Jogo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Jogo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Jogo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class JogosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('jogos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Consoles', [
            'foreignKey' => 'consoles_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->allowEmptyString('nome');

        $validator
            ->date('lancamento')
            ->allowEmptyDate('lancamento');

        $validator
            ->scalar('plataforma')
            ->maxLength('plataforma', 45)
            ->allowEmptyString('plataforma');

        $validator
            ->scalar('preco')
            ->maxLength('preco', 45)
            ->allowEmptyString('preco');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('consoles_id', 'Consoles'), ['errorField' => 'consoles_id']);

        return $rules;
    }
}
