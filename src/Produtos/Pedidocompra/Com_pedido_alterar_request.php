<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Alterar um Pedido de Compra
 *
 * @pw_element cabecalho_alterar $cabecalho_alterar Cabeçalho do Pedido de Compra
 * @pw_element frete_alterar $frete_alterar Frete, Transporte e Outras Despesas do Pedido de Compra
 * @pw_element produtos_alterarArray $produtos_alterar Produtos do Pedido de Compra
 * @pw_element departamentos_alterarArray $departamentos_alterar Rateio do Pedido de Compra por departamento
 * @pw_element parcelas_alterarArray $parcelas_alterar Parcelas  do Pedido de Compra.
 * @pw_complex com_pedido_alterar_request
 */
class Com_pedido_alterar_request{
	/**
	 * Cabeçalho do Pedido de Compra
	 *
	 * @var Cabecalho_alterar
	 */
	public Cabecalho_alterar $cabecalho_alterar;
	/**
	 * Frete, Transporte e Outras Despesas do Pedido de Compra
	 *
	 * @var Frete_alterar
	 */
	public Frete_alterar $frete_alterar;
	/**
	 * Produtos do Pedido de Compra
	 *
	 * @var Produtos_alterar[]
	 */
	public array $produtos_alterar;
	/**
	 * Rateio do Pedido de Compra por departamento
	 *
	 * @var Departamentos_alterar[]
	 */
	public array $departamentos_alterar;
	/**
	 * Parcelas  do Pedido de Compra.
	 *
	 * @var Parcelas_alterar[]
	 */
	public array $parcelas_alterar;
}
