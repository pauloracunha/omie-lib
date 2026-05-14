<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais dos Pedidos de Compras.
 *
 * @pw_element emAberto $emAberto Estrutura contendo os valores em aberto.
 * @pw_element string $cIconePed Unicode do Ícone pendente.
 * @pw_element string $cCorPed Hexadecimal da cor.
 * @pw_element recebido $recebido Exibe os totais dos pedidos de compras recebidos.
 * @pw_element string $cIconeFat Unicode do Ícone faturado.
 * @pw_element string $cCorFat Hexadecimal da cor.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element faturarHoje $faturarHoje
 * @pw_element compras $compras
 * @pw_element string $cCorCompras Hexadecimal da cor.
 * @pw_element string $cCorEmAprov Hexadecimal da cor.
 * @pw_element string $cIconeCompras Unicode do Ícone.
 * @pw_element string $cIconeEmAprov Unicode do Ícone.
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
 * @pw_complex pedidoCompra
 */
class PedidoCompra{
	/**
	 * Estrutura contendo os valores em aberto.
	 *
	 * @var EmAberto
	 */
	public EmAberto $emAberto;
	/**
	 * Unicode do Ícone pendente.
	 *
	 * @var string
	 */
	public string $cIconePed;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorPed;
	/**
	 * Exibe os totais dos pedidos de compras recebidos.
	 *
	 * @var Recebido
	 */
	public Recebido $recebido;
	/**
	 * Unicode do Ícone faturado.
	 *
	 * @var string
	 */
	public string $cIconeFat;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorFat;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
	/**
	 * @var FaturarHoje
	 */
	public FaturarHoje $faturarHoje;
	/**
	 * @var Compras
	 */
	public Compras $compras;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorCompras;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorEmAprov;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIconeCompras;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIconeEmAprov;
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
	 *
	 * @var string
	 */
	public string $cVisualizar;
}
