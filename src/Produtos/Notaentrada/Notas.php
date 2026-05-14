<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Cadastro da nota de entrada
 *
 * @pw_element cabec $cabec Cabeçalho da nota de entrada
 * @pw_element frete $frete Dados do frete da nota de entrada
 * @pw_element infAdic $infAdic Informações adicionais da nota de entrada
 * @pw_element email $email Email para o Cliente (ou Destinatário)
 * @pw_element obs $obs Observações da nota de entrada
 * @pw_element totais $totais Totais da nota de entrada
 * @pw_element produtosArray $produtos Itens da nota de entrada
 * @pw_element departamentos $departamentos Departamentos da Nota de Entrada
 * @pw_complex notas
 */
class Notas{
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
	 * Totais da nota de entrada
	 *
	 * @var Totais
	 */
	public Totais $totais;
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
