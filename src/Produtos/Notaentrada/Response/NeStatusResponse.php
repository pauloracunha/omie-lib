<?php

namespace OmieLib\Produtos\Notaentrada\Response;

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
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\TRIB_REG;
use OmieLib\Produtos\Notaentrada\Totais;
use OmieLib\Produtos\Notaentrada\Veiculos;

/**
 * Resposta da solicitação de consulta do status da nota de entrada
 *
 * @pw_element integer $nCodNotaEnt Código da Nota de Entrada no Omie<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntNotaEnt Código de Integração da Nota de Entrada <BR><BR>Preenchimento obrigatório na inclusão e na alteração quando nCodNotaEnt não for informado.<BR><BR>Preenchimento opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código da nota de entrada no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de notas de entrada você conseguirá ver a relação entre o id da nota de entrada gerado no Omie e o código de pedido existente em sua aplicação.
 * @pw_element string $cNumeroNotaEnt Número da noata de entrada exibido na tela.<BR><BR>Preenchimento automático na inclusão/alteração.<BR><BR>Disponível apenas na consulta/listagem como retorno de informação.
 * @pw_element string $cancelada NF-e Cancelada?
 * @pw_element string $faturada Nota Fiscal foi faturada
 * @pw_element string $cAmbiente Ambiente da NF-e (Danfe)
 * @pw_element decimal $nValorTotal Valor total da nota de entrada
 * @pw_element ListaNfeArray $ListaNfe Lista de NF-es geradas
 * @pw_complex neStatusResponse
 */
class NeStatusResponse{
	/**
	 * Código da Nota de Entrada no Omie<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nCodNotaEnt;
	/**
	 * Código de Integração da Nota de Entrada <BR><BR>Preenchimento obrigatório na inclusão e na alteração quando nCodNotaEnt não for informado.<BR><BR>Preenchimento opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código da nota de entrada no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de notas de entrada você conseguirá ver a relação entre o id da nota de entrada gerado no Omie e o código de pedido existente em sua aplicação.
	 *
	 * @var string
	 */
	public string $cCodIntNotaEnt;
	/**
	 * Número da noata de entrada exibido na tela.<BR><BR>Preenchimento automático na inclusão/alteração.<BR><BR>Disponível apenas na consulta/listagem como retorno de informação.
	 *
	 * @var string
	 */
	public string $cNumeroNotaEnt;
	/**
	 * NF-e Cancelada?
	 *
	 * @var string
	 */
	public string $cancelada;
	/**
	 * Nota Fiscal foi faturada
	 *
	 * @var string
	 */
	public string $faturada;
	/**
	 * Ambiente da NF-e (Danfe)
	 *
	 * @var string
	 */
	public string $cAmbiente;
	/**
	 * Valor total da nota de entrada
	 *
	 * @var decimal
	 */
	public float $nValorTotal;
	/**
	 * Lista de NF-es geradas
	 *
	 * @var ListaNfe[]
	 */
	public array $ListaNfe;
}
