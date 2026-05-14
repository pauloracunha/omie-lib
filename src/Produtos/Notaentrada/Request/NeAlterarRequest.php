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
 * Solicitação de alteração da nota de entrada
 *
 * @pw_element cabec $cabec Cabeçalho da nota de entrada
 * @pw_element frete $frete Dados do frete da nota de entrada
 * @pw_element infAdic $infAdic Informações adicionais da nota de entrada
 * @pw_element email $email Email para o Cliente (ou Destinatário)
 * @pw_element obs $obs Observações da nota de entrada
 * @pw_element produtosArray $produtos Itens da nota de entrada
 * @pw_element departamentos $departamentos Departamentos da Nota de Entrada
 * @pw_complex neAlterarRequest
 */
class NeAlterarRequest{
	/**
	 * Cabeçalho da nota de entrada
	 *
	 * @var Cabec
	 */
	public Cabec $cabec;
	/**
	 * Dados do frete da nota de entrada
	 *
	 * @var Frete
	 */
	public Frete $frete;
	/**
	 * Informações adicionais da nota de entrada
	 *
	 * @var InfAdic
	 */
	public InfAdic $infAdic;
	/**
	 * Email para o Cliente (ou Destinatário)
	 *
	 * @var Email
	 */
	public Email $email;
	/**
	 * Observações da nota de entrada
	 *
	 * @var Obs
	 */
	public Obs $obs;
	/**
	 * Itens da nota de entrada
	 *
	 * @var Produtos[]
	 */
	public array $produtos;
	/**
	 * Departamentos da Nota de Entrada
	 *
	 * @var Departamentos
	 */
	public Departamentos $departamentos;
}
