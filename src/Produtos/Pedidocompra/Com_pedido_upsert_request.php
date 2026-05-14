<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Upsert (inclusão ou alteração) de um Pedido de Compra
 *
 * @pw_element cabecalho_upsert $cabecalho_upsert Cabeçalho do Pedido de Compra
 * @pw_element frete_upsert $frete_upsert Frete, Transporte e Outras Despesas do Pedido de Compra
 * @pw_element produtos_upsertArray $produtos_upsert Produtos do Pedido de Compra
 * @pw_element departamentos_upsertArray $departamentos_upsert Rateio do Pedido de Compra por departamento
 * @pw_element parcelas_upsertArray $parcelas_upsert Parcelas  do Pedido de Compra.
 * @pw_complex com_pedido_upsert_request
 */
class Com_pedido_upsert_request{
	/**
	 * Cabeçalho do Pedido de Compra
	 *
	 * @var Cabecalho_upsert
	 */
	public Cabecalho_upsert $cabecalho_upsert;
	/**
	 * Frete, Transporte e Outras Despesas do Pedido de Compra
	 *
	 * @var Frete_upsert
	 */
	public Frete_upsert $frete_upsert;
	/**
	 * Produtos do Pedido de Compra
	 *
	 * @var Produtos_upsert[]
	 */
	public array $produtos_upsert;
	/**
	 * Rateio do Pedido de Compra por departamento
	 *
	 * @var Departamentos_upsert[]
	 */
	public array $departamentos_upsert;
	/**
	 * Parcelas  do Pedido de Compra.
	 *
	 * @var Parcelas_upsert[]
	 */
	public array $parcelas_upsert;
}
