<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Lista com os pedidos de compra
 *
 * @pw_element cabecalho_consulta $cabecalho_consulta Cabeçalho do Pedido de Compra
 * @pw_element frete_consulta $frete_consulta Frete, Transporte e Outras Despesas do Pedido de Compra
 * @pw_element produtos_consultaArray $produtos_consulta Produtos do Pedido de Compra
 * @pw_element parcelas_consultaArray $parcelas_consulta Parcelas do Pedido de Compras
 * @pw_element departamentos_consultaArray $departamentos_consulta Departamentos do Pedido de Compras
 * @pw_complex pedidos_pesquisa
 */
class Pedidos_pesquisa{
	/**
	 * Cabeçalho do Pedido de Compra
	 *
	 * @var Cabecalho_consulta
	 */
	public Cabecalho_consulta $cabecalho_consulta;
	/**
	 * Frete, Transporte e Outras Despesas do Pedido de Compra
	 *
	 * @var Frete_consulta
	 */
	public Frete_consulta $frete_consulta;
	/**
	 * Produtos do Pedido de Compra
	 *
	 * @var Produtos_consulta[]
	 */
	public array $produtos_consulta;
	/**
	 * Parcelas do Pedido de Compras
	 *
	 * @var Parcelas_consulta[]
	 */
	public array $parcelas_consulta;
	/**
	 * Departamentos do Pedido de Compras
	 *
	 * @var Departamentos_consulta[]
	 */
	public array $departamentos_consulta;
}
