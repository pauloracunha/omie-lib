<?php

namespace OmieLib\Produtos\Notaentrada\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\CBS;
use OmieLib\Produtos\Notaentrada\COFINS;
use OmieLib\Produtos\Notaentrada\Cabec;
use OmieLib\Produtos\Notaentrada\Combustivel;
use OmieLib\Produtos\Notaentrada\Custos;
use OmieLib\Produtos\Notaentrada\DeducaoCanaAc;
use OmieLib\Produtos\Notaentrada\Departamentos;
use OmieLib\Produtos\Notaentrada\Email;
use OmieLib\Produtos\Notaentrada\Frete;
use OmieLib\Produtos\Notaentrada\IBS;
use OmieLib\Produtos\Notaentrada\IBS_CBS;
use OmieLib\Produtos\Notaentrada\ICMS;
use OmieLib\Produtos\Notaentrada\ICMS_INTER;
use OmieLib\Produtos\Notaentrada\ICMS_SN;
use OmieLib\Produtos\Notaentrada\ICMS_ST;
use OmieLib\Produtos\Notaentrada\IPI;
use OmieLib\Produtos\Notaentrada\InfAdic;
use OmieLib\Produtos\Notaentrada\InfAdicFisco;
use OmieLib\Produtos\Notaentrada\InfAdicItem;
use OmieLib\Produtos\Notaentrada\InfCanaAcucar;
use OmieLib\Produtos\Notaentrada\ListaNfe;
use OmieLib\Produtos\Notaentrada\Lote_validade;
use OmieLib\Produtos\Notaentrada\Medicamentos;
use OmieLib\Produtos\Notaentrada\Mensagens;
use OmieLib\Produtos\Notaentrada\NfRelacionada;
use OmieLib\Produtos\Notaentrada\NotaEntradaJsonClient;
use OmieLib\Produtos\Notaentrada\Notas;
use OmieLib\Produtos\Notaentrada\NrCupomFiscal;
use OmieLib\Produtos\Notaentrada\NrModelo1_1A;
use OmieLib\Produtos\Notaentrada\NrNF;
use OmieLib\Produtos\Notaentrada\NrProdutorRural;
use OmieLib\Produtos\Notaentrada\Obs;
use OmieLib\Produtos\Notaentrada\OutrasInfVeiculo;
use OmieLib\Produtos\Notaentrada\OutrosDet;
use OmieLib\Produtos\Notaentrada\PIS;
use OmieLib\Produtos\Notaentrada\PinturaCor;
use OmieLib\Produtos\Notaentrada\PotenciaMotor;
use OmieLib\Produtos\Notaentrada\Produtos;
use OmieLib\Produtos\Notaentrada\QtdDiariaCanaAc;
use OmieLib\Produtos\Notaentrada\Rastreabilidade;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;
use OmieLib\Produtos\Notaentrada\TRIB_REG;
use OmieLib\Produtos\Notaentrada\Totais;
use OmieLib\Produtos\Notaentrada\Veiculos;

/**
 * Solicitação de listagem da nota de entrada
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistrosPorPagina Número de registros retornados.
 * @pw_element string $cOrdenarPor Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>CODINT - Código do lançamento interno do seu sistema.
 * @pw_element string $dtAltDe Filtra os registros a partir da data específicada.
 * @pw_element string $dtAltAte Filtra os registros até a data específicada.
 * @pw_element string $hrAltDe Filtra os registros a partir da hora específicada.
 * @pw_element string $hrAltAte Filtra os registros até a hora específicada.
 * @pw_element integer $nIdCliente Filtra os registros do cliente específicado.
 * @pw_element string $cExibirDetalhes Exibir os detalhes da nota de entrada.<BR><BR>Preencher com "S" ou "N".
 * @pw_complex neListarRequest
 */
class NeListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $nRegistrosPorPagina;
	/**
	 * Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>CODINT - Código do lançamento interno do seu sistema.
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Filtra os registros a partir da data específicada.
	 *
	 * @var string
	 */
	public string $dtAltDe;
	/**
	 * Filtra os registros até a data específicada.
	 *
	 * @var string
	 */
	public string $dtAltAte;
	/**
	 * Filtra os registros a partir da hora específicada.
	 *
	 * @var string
	 */
	public string $hrAltDe;
	/**
	 * Filtra os registros até a hora específicada.
	 *
	 * @var string
	 */
	public string $hrAltAte;
	/**
	 * Filtra os registros do cliente específicado.
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * Exibir os detalhes da nota de entrada.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $cExibirDetalhes;
}
