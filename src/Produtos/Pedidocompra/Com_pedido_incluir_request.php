<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Incluir um Pedido de Compra
 *
 * @pw_element cabecalho_incluir $cabecalho_incluir Cabeçalho do Pedido de Compra
 * @pw_element frete_incluir $frete_incluir Frete, Transporte e Outras Despesas do Pedido de Compra
 * @pw_element produtos_incluirArray $produtos_incluir Produtos do Pedido de Compra
 * @pw_element departamentos_incluirArray $departamentos_incluir Rateio do Pedido de Compra por departamento
 * @pw_element parcelas_incluirArray $parcelas_incluir Parcelas  do Pedido de Compra.
 * @pw_complex com_pedido_incluir_request
 */
class Com_pedido_incluir_request{
	/**
	 * Cabeçalho do Pedido de Compra
	 *
	 * @var Cabecalho_incluir
	 */
	public Cabecalho_incluir $cabecalho_incluir;
	/**
	 * Frete, Transporte e Outras Despesas do Pedido de Compra
	 *
	 * @var Frete_incluir
	 */
	public Frete_incluir $frete_incluir;
	/**
	 * Produtos do Pedido de Compra
	 *
	 * @var Produtos_incluir[]
	 */
	public array $produtos_incluir;
	/**
	 * Rateio do Pedido de Compra por departamento
	 *
	 * @var Departamentos_incluir[]
	 */
	public array $departamentos_incluir;
	/**
	 * Parcelas  do Pedido de Compra.
	 *
	 * @var Parcelas_incluir[]
	 */
	public array $parcelas_incluir;
}
