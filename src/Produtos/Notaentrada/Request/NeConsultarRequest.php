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
 * Solicitação de consulta da nota de entrada
 *
 * @pw_element integer $nCodNotaEnt Código da Nota de Entrada no Omie<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntNotaEnt Código de Integração da Nota de Entrada <BR><BR>Preenchimento obrigatório na inclusão e na alteração quando nCodNotaEnt não for informado.<BR><BR>Preenchimento opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código da nota de entrada no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de notas de entrada você conseguirá ver a relação entre o id da nota de entrada gerado no Omie e o código de pedido existente em sua aplicação.
 * @pw_complex neConsultarRequest
 */
class NeConsultarRequest{
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
}
